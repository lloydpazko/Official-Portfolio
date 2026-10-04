<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteContent extends Model
{
     protected $fillable = [
        'section',
        'key',
        'value',
        'type',
    ];

    /**
     * Get a specific website content value.
     */
    public static function getValue(string $section, string $key, ?string $default = null): ?string
    {
        return static::where('section', $section)
            ->where('key', $key)
            ->value('value') ?? $default;
    }

    /**
     * Save or update a website content value.
     */
    public static function setValue(
        string $section,
        string $key,
        ?string $value,
        string $type = 'text'
    ): static {
        return static::updateOrCreate(
            [
                'section' => $section,
                'key' => $key,
            ],
            [
                'value' => $value,
                'type' => $type,
            ]
        );
    }
}
