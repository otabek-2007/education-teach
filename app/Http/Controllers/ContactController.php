<?php

// ContactController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Telegram bot token and chat ID (consider moving these to .env)
        $telegram_bot_token = env('TELEGRAM_BOT_TOKEN');
        $telegram_chat_id = env('TELEGRAM_CHAT_ID');

        // Prepare the message
        $telegram_message = "Name: {$validatedData['name']}\nEmail: {$validatedData['email']}\nMessage: {$validatedData['message']}";

        // Send message to Telegram
        $response = Http::post("https://api.telegram.org/bot{$telegram_bot_token}/sendMessage", [
            'chat_id' => $telegram_chat_id,
            'text' => $telegram_message
        ]);

        // Check if the message was sent successfully
        if ($response->successful()) {
            return response()->json(['success' => 'Message sent successfully!']);
        }

        return response()->json(['error' => 'Failed to send message'], 500);
    }
}
