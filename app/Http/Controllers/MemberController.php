<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Actions\UploadHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

class MemberController extends Controller
{

    public function exportUsers(Request $request)
    {
        $emirates = $request->input('emirates');  // Get the selected emirate

        return Excel::download(new UsersExport($emirates), 'users.xlsx');
    }
    public function upload(Request $request)
    {
        // Validate the file
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        // Import the Excel file
        Excel::import(new UsersImport, $request->file('file'));

        return back()->with('success', 'Data imported successfully!');
    }

    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request, UploadHelper $uploadHelper)
    {

        if (!isset($request->id)) {

            $request->validate([
                "name" => "required",
                "email" => "required",
                "mobile" => "required",
                "dob" => "required",
                "whatsapp" => "required",
                "blood_group" => "required",
                "emirates" => "required",
                "image" => "required|mimes:jpeg,jpg,png,gif,heic,webp|max:2048",
                "profession" => "required",
                "zone" => "required",
                "membership_type" => "required",

                "house_name" => "required",
                "district" => "required",
                "panjayath" => "required",
                "pin" => "required",
                "mandalam" => "required",
                "before_pdp" => "required",

            ]);
        }
        $members = null;
        if (isset($request->id)) {
            $members = Member::findOrFail($request->id);
            if (!$members)
                return redirect()->back()->with('error', 'Listing Not Found!');
        } else {
            $members = new Member();
        }
        if (isset($request->name))
            $members->name = $request->name;
        if (isset($request->email))
            $members->email = $request->email;
        if (isset($request->mobile))
            $members->mobile = $request->mobile;
        if (isset($request->whatsapp))
            $members->whatsapp = $request->whatsapp;
        if (isset($request->dob))
            $members->dob = $request->dob;
        if (isset($request->blood_group))
            $members->blood_group = $request->blood_group;
        if (isset($request->emirates))
            $members->emirates = $request->emirates;
        $members->membership_number = $request->emirates === "Dubai" ? 'dxb 01' : (
            $request->emirates === 'Sharjah' ? 'shj 01' : (
                $request->emirates === 'Ajman' ? 'ajm 01' : (
                    $request->emirates === 'Umm Al Quwain' ? 'uaq 01' : (
                        $request->emirates === 'Ras Al Khaimah' ? 'rak 01' : (
                            $request->emirates === 'Fujairah' ? 'fuj 01' : 'auh 01'
                        )
                    )
                )
            )
        );

        if (isset($request->profession))
            $members->profession = $request->profession;
        if (isset($request->zone))
            $members->zone = $request->zone;
        if (isset($request->membership_type))
            $members->membership_type = $request->membership_type;
        $members->issued = date('d/m/Y');
        $members->expiry = $request->membership_type === 'primary' ? date('d/m/Y', strtotime('+2 years')) : date('d/m/Y', strtotime('+1 years'));
        if (isset($request->house_name))
            $members->house_name = $request->house_name;
        if (isset($request->district))
            $members->district = $request->district;
        if (isset($request->panjayath))
            $members->panjayath = $request->panjayath;
        if (isset($request->pin))
            $members->pin = $request->pin;
        if (isset($request->mandalam))
            $members->mandalam = $request->mandalam;
        if (isset($request->before_pdp))
            $members->before_pdp = $request->before_pdp;
        if (isset($request->image))
            $members->image = $uploadHelper->store('members', $request->image);
        $members->save();

        DB::table('emirates')->where('name', $request->emirates)->increment('count');


        Alert::success('Success', 'New Member Added!');
        return back();
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('members.show', compact('member'));
    }

    public function update_status($id, $status)
    {
        $member = Member::findOrFail($id);
        $member->status = $status;
        if ($member->save()) {
            Alert::success('Success', 'Member updated successfully!');
        } else {
            Alert::error('Error', 'Failed to update member.');
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        

        $member = Member::find($id);
        if (!$member) {
            dd('Member not found');
        }

        $member->name = $request->name;
        $member->email = $request->email;
        $member->mobile = $request->mobile;
        $member->dob = $request->dob;
        $member->whatsapp = $request->whatsapp;
        $member->profession = $request->profession;
        $member->membership_number = $request->membership_number;
        $member->issued = $request->issued;
        $member->expiry = $request->expiry;
        $member->zone = $request->zone;
        $member->house_name = $request->house_name;
        $member->district = $request->district;
        $member->panjayath = $request->panjayath;
        $member->pin = $request->pin;
        $member->mandalam = $request->mandalam;

        if ($member->save()) {
            Alert::success('Success', 'Member updated successfully!');
        } else {
            Alert::error('Error', 'Failed to update member.');
        }

        return redirect()->back();
    }

    public function editUser($id)
    {
        $user = Auth::user();
        $member = Member::findOrFail($id);
        if ($user->emirate) {
            $user->type = 'admin';
        } else {
            $user->type = 'super';
        }
        return view('dashboard.site.edit-user', compact('member', 'user'));
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $isDeleted = $member->delete();

        if ($isDeleted) {
            $this->deleteImage($member->image);
            Alert::success('Success', 'Member Removed Successfully!');
        } else {
            Alert::error('Error', 'Failed to Remove Member!');
        }

        return redirect()->route('members.index');
    }

    private function deleteImage($imagePath)
    {
        if (file_exists(public_path($imagePath))) {
            unlink(public_path($imagePath));
        }
    }
}
