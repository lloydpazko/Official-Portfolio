<?php

namespace App\Http\Controllers;

use App\Models\Message;

class AdminMessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();

        return view('admin.messages', compact('messages'));
    }

    public function show(Message $message)
    {
        $message->is_read = true;
        $message->save();

        return view('admin.message-show', compact('message'));
    }
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()
            ->route('admin.messages')
            ->with('success', 'Message deleted successfully.');
    }
}
