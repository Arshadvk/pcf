<?php

namespace App\Http\Controllers;

use App\Models\Emirate;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function about()
    {
        return view('site.about');
    }

    public function news()
    {
        return view('site.news');
    }

    public function team()
    {
        return view('site.team');
    }

    public function contact()
    {
        return view('site.contact');
    }
    public function register()
    {
        return view('site.register');
    }

    public function gallery()
    {
        return view('site.gallery');
    }

    public function login()
    {
        $page_title = 'Page Login';
        $action = __FUNCTION__;
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('auth.login', compact('action', 'page_title'));
        }
    }

    public function resetPassword()
    {
        $page_title = 'Page Login';
        $action = __FUNCTION__;
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('auth.auth-recover', compact('action', 'page_title'));
        }
    }





    /// admin dashboard code
    public function dashboard()
    {
        $user = Auth::user();

        if ($user->emirate) {
            $emirates = Emirate::where('name', $user->emirate)->get(); // Ensure this is a collection
        } else {
            $emirates = Emirate::orderby('id', 'asc')->get();
        }

        return view('dashboard.site.dashboard', compact('emirates', 'user'));
    }

    public function user_requests()
    {
        $user = Auth::user();

        // Check if user has an emirate set
        if ($user->emirate) {
            // Use where with multiple conditions
            $members = Member::where('emirates', $user->emirate)
                ->where('status', 'pending')
                ->get();
            $user->type = 'admin';
        } else {
            // Fetch all members ordered by ID if no emirate is set
            $user->type = 'super';
            $members = Member::where('status', 'approved')
                ->orderBy('id', 'asc')
                ->get();
        }

        // Return the view with the members data
        return view('dashboard.site.user-requests', compact('members', 'user'));
    }

    public function addBlog()
    {
        $user = Auth::user();
        return view('dashboard.site.add-blog', compact('user'));
    }


    public function addUser()
    {
        $user = Auth::user();
        return view('dashboard.site.add-user', compact('user'));
    }
    public function listUser()
    {
        $users = Member::where('status', 'verified')
            ->orderby('id', 'desc')
            ->get();
            
        $user = Auth::user();
        return view('dashboard.site.list-user', compact('users', 'user'));
    }

    public function singleUser($id)
    {
        $user = Auth::user();
        $member = Member::findOrFail($id);

        return view('dashboard.site.user-id', compact('member', 'user'));
    }
}
