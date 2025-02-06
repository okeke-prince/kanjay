<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\NewsletterMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{

    public function sendNewsletter(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);

        $subscribers = Subscriber::latest()->get();
        $successCount = 0;
        $failureCount = 0;

        foreach ($subscribers as $subscriber) {
            try {
                Mail::to($subscriber->email)->send(new NewsletterMail($request->subject, $request->content));

                $successCount++;
            } catch (\Exception $e) {
                // Log the error if needed
                dd($e);
                $failureCount++;
            }
        }

        if ($failureCount === 0) {
            return redirect()->back()->with('success', "Newsletter sent successfully to $successCount subscribers.");
        } else {
            return redirect()->back()->with('error', "Failed to send newsletter to $failureCount subscribers.");
        }
    }

    public function removeSubscriber($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();

        return redirect()->back()->with('success', 'Subscriber removed successfully.');
    }
    
}
