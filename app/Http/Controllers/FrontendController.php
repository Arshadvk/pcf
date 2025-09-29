<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Emirate;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\News;
use App\Models\Position;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function emirate($id)
    {
        // Debug logging
        Log::info("Emirate ID: " . $id);

        // Fetch emirate by ID
        $emirate = Emirate::findOrFail($id);
        Log::info($emirate);

        // Committees in this emirate
        $section_one = Committee::where('emirates', $id)
            ->whereIn('position_id', [1, 2, 3])
            ->with('position')
            ->get();


        Log::info("section_one");
        Log::info($section_one);

        // Committees in this emirate with position_id = 11
        $section_two = Committee::where('emirates', $id)
            ->where('position_id', 11)
            ->get();

        // Committees in this emirate with position_id = 12
        $section_three = Committee::where('emirates', $id)
            ->where('position_id', 12)
            ->get();

        return view('new.site.emirate', compact('emirate', 'section_one', 'section_two', 'section_three'));
    }

    public function news()
    {
        $news = News::orderby('id', 'asc')->get();
        return view('new.site.news', compact('news'));
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
        return view('new.site.gallery', compact('gallery'));
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
        } else {
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
        $positions = Position::all();
        $emirates = Emirate::all();
        return view('dashboard.site.add-committee', compact('user', 'positions', 'emirates'));
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
        } else {
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


    public function downloadUserCard($id)
{
    $user = Auth::user();
    $member = Member::findOrFail($id);

    $pdf = Pdf::loadView('dashboard.site.user-id-pdf', compact('member', 'user'))
        ->setPaper([0, 0, 459.21, 728.50], 'portrait'); 
        // custom size: 16.2cm x 25.68cm

    return $pdf->stream('card-' . $member->membership_number . '.pdf');
}

}
