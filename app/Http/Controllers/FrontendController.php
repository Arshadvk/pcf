<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Emirate;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('new.site.index');
    }

    public function about()
    {
        return view('new.site.about');
    }

    public function emirates ()
    {
        $emirates = Emirate::orderby('id', 'asc')->get();

        return view('new.site.emirates' , compact('emirates'));

    }
    public function emirate ( $id)
    {
    
        $emirate = Emirate::find($id); // Fetch the Emirate by ID
        $committee = Committee::where('emirates', $emirate->name)->get();
         
        return view('new.site.emirate', compact('emirate' , 'committee'));

    }
    public function news()
    {   
        $news = News::orderby('id', 'asc')->get();
        return view('new.site.news' ,compact('news'));
    }

    public function team()
    {
        return view('new.site.team');
    }

    public function contact()
    {
        return view('new.site.contact');
    }
    public function register()
    {
        return view('new.site.register');
    }

    public function gallery()
    {
        $gallery = Gallery::orderby('id', 'asc')->get();
        return view('new.site.gallery' ,compact('gallery'));
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
            $members = Member::where('emirates', $user->emirate)
                ->where('status', '!=', 'approved') // Exclude "verified"
                ->get();
            $user->type = 'admin';
        }
         else {
            // Fetch all members ordered by ID if no emirate is set
            $user->type = 'super';
            $members = Member::where('status', 'verified')
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

    public function addCommittee()
    {
        $user = Auth::user();
        return view('dashboard.site.add-committee', compact('user'));
    }
    public function addUser()
    {
        $user = Auth::user();
        return view('dashboard.site.add-user', compact('user'));
    }
    public function listUser()
    {
        $user = Auth::user();

       // Check if user has an emirate set
       if ($user->emirate) {
           $users = Member::where('emirates', $user->emirate)
               ->where('status', 'approved') // Exclude "verified"
               ->get();
           $user->type = 'admin';
       }
        else {
           // Fetch all members ordered by ID if no emirate is set
           $user->type = 'super';
           $users = Member::where('status', 'approved')
               ->orderBy('id', 'desc')
               ->get();
       }
       
       return view('dashboard.site.list-user', compact('users', 'user'));
   }

    public function singleUser($id)
    {
        $user = Auth::user();
        $member = Member::findOrFail($id);

        return view('dashboard.site.user-id', compact('member', 'user'));
    }
}
