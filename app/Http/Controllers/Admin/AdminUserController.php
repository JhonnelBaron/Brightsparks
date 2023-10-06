<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function createDefaultAdmin()
    {
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@brightsparks.com';
        $admin->password = bcrypt('password'); // Hash the password securely
        $admin->is_admin = true;
        $admin->save();
    
        return 'Admin user created successfully!';
    }

        // Show the admin login form
        public function showLoginForm()
        {
            return view('admin.login');
        }
    
        // Handle the admin login attempt
        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');
    
            if (auth('admin')->attempt($credentials)) {
                // Authentication successful for admin
                return redirect()->intended('/admin/dashboard'); // Redirect to the admin dashboard
            }
    
            // Authentication failed
            return back()->withInput()->withErrors(['email' => 'Invalid credentials']);
        }
    
        // Log out the admin user
        public function logout()
        {
            auth('admin')->logout();
            return redirect('/admin/login'); // Redirect to the admin login page
        }
}
