<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Actions\UploadHelper;

class AdminController extends Controller
{
    public function postLogin(Request $request)
    {
        $action = __FUNCTION__;
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            $user = Auth::user();
            if ($user->email_verified_at !== null || true) {
                Alert::success('Success', 'Login successfull');
                return redirect()->route('dashboard', compact('user', 'action'));
            } else {
                Alert::error('Failed', 'Please Verify Email!');
                return back();
            }
        } else {
            Alert::error('Failed', 'Invalid Email/ Password');
            return back();
        }
    }

    public function logout()
    {
        if (Auth::logout()) {
            Alert::success('Success', 'Logged Out');
            return back();
        } else {
            Alert::error('Error', 'Logout Failed');
            return back();
        }
    }

    public function profile () 
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));

    }

    public function password(Request $request) 
   {
    /** @var User $user */
    $user = Auth::user(); // Explicitly tell IntelliSense the type
    if ($user === null) {
        Alert::error('Error','User not authenticated.');
        return back();
    }

  
    if (Hash::check($request->old_password, $user->password)) {
        $user->password = Hash::make($request->new_password);
        $user->save();

        Alert::success('Success', 'Password Changed Successfully');
        return back();
    } else {
        Alert::error('Error', 'Old Password is Incorrect');
        return back();
    }
}


    
}
