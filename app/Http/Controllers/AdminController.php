<?php

namespace App\Http\Controllers;

use App\Actions\UploadHelper;
use App\Models\Emirate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

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

public function resetUserPassword($id)
    {
        $user = User::findOrFail($id);

        // Generate random password
        $newPassword = Str::random(8);

        $user->password = Hash::make($newPassword);
        $user->save();

        Alert::success(
            'Password Reset',
            "New password for {$user->email} is: {$newPassword}"
        );

        return back();
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);

        // Prevent deleting yourself
        if (Auth::id() === $user->id) {
            Alert::error('Error', 'You cannot delete your own account');
            return back();
        }

        $user->delete();

        Alert::success('Success', 'User deleted successfully');
        return back();
    }

    public function users()
    {
        $users = User::with('emirate')->orderBy('id', 'desc')->get();
        return view('dashboard.site.user.list', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        $emirates = Emirate::all();

        return view('dashboard.site.user.edit', compact('user', 'emirates'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,$id",
            'emirates_id' => 'nullable|exists:emirates,id',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'emirates_id' => $request->emirates_id,
        ]);

        Alert::success('Success', 'User updated successfully');
        return redirect()->route('admin.users');
    }


    
}
