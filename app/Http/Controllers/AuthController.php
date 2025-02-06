<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check your input.');
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.');
    }

    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|string|min:3',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput()
    //             ->with('error', 'Validation failed. Please check your input.');
    //     }

    //     $user = new User();
    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     $user->role = 1;
    //     $user->password = Hash::make($request->input('password')); // Hash the password

    //     $user->save();

    //     return redirect()->route('admin.index')->with('success', 'User registered successfully.');
    // }

    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out.'); // Redirect to the desired page after logout
    }

    // ADMIN USER ROUTES
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.profile.IndexAdmin', [
            'users' => $users
        ]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            // Handle the case where the user doesn't exist
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User deleted successfully.');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:3',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check your input.');
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('admin.index')->with('success', 'User registered successfully.');
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:3',
            'confirm_password' => 'required|string|same:new_password',
        ]);

        if ($request->input('new_password') !== $request->input('confirm_password')) {
            return redirect()
                ->back()
                ->with('error', 'The new password and confirm password must match.');
        }

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check your input.');
        }

        $user = Auth::user();

        // Verify the current password
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        // Update the password
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully.');
    }

    public function changeAdminPassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:3',
            'confirm_password' => 'required|string|same:new_password',
        ]);

        if ($validator->fails() || $request->input('new_password') !== $request->input('confirm_password')) {
            return redirect()
                ->back()
                ->with('error', 'The new password and confirm password must match.');
        }

        $admin = User::findOrFail($id);

        // Verify the current password
        if (!Hash::check($request->input('current_password'), $admin->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        // Update the password for the specified admin
        $admin->password = Hash::make($request->input('new_password'));
        $admin->save();

        return redirect()->bac()->with('success', 'Password changed successfully.');
    }
}
