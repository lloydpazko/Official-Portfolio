<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Project;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $projectsCount = Project::count();

        $messagesCount = Message::count();

        $featuredCount = Project::where('is_featured', true)->count();

        $unreadCount = Message::where('is_read', false)->count();

        $recentMessages = Message::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'projectsCount',
            'messagesCount',
            'featuredCount',
            'unreadCount',
            'recentMessages'
        ));
    }
}
