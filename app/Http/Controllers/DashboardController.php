<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\PopularRoutes;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $faqCount = Faq::count();
        $subscriptionCount = Subscriber::count();
        $locationCount = PopularRoutes::count();
        return view('admin.dashboard', compact('faqCount', 'subscriptionCount', 'locationCount'));
    }
    public function newsletter()
    {
        $subscribers = Subscriber::all();
        return view('admin.newsletter', ['subscribers' => $subscribers]);
    }

    public function login()
    {
        return view('admin.login');;
    }

    public function ProfilePage()
    {
        return view('admin.profile.profile');;
    }

    public function updatePassword($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.profile.UpdatePassword', ['admin' => $admin]);
    }
}
