<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;
use App\Actions\UploadHelper;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class CommitteeController extends Controller
{
    //
    public function index()
    {
        $committee = Committee::all();
        $user = Auth::user();
        return view('dashboard.site.list-committee', compact('committee' , 'user'));
    }


    public function list()
    {
    return $this->index();
    }

    public function create()
    {
        return view('committee.create');
    }

    public function store(Request $request, UploadHelper $uploadHelper)
    {

        if (!isset($request->id)) {

            $request->validate([
                "name" => "required",
                "emirates" => "required",
                "image" => "mimes:jpeg,jpg,png,gif,heic,webp",
    
            ]);
        }
        $committee = null;
        if (isset($request->id)) {
            $committee = Committee::findOrFail($request->id);
            if (!$committee)
                return redirect()->back()->with('error', 'Listing Not Found!');
        } else {
            $committee = new Committee();
        }
        if (isset($request->name))
            $committee->name = $request->name;;
        if (isset($request->emirates))
            $committee->emirates = $request->emirates;
        $committee->membership_number = $request->emirates === "Dubai" ? 'DXB-' : (
            $request->emirates === 'Sharjah' ? 'SHJ-' : (
                $request->emirates === 'Ajman' ? 'AJM-' : (
                    $request->emirates === 'Umm Al Quwain' ? 'UAQ-' : (
                        $request->emirates === 'Ras Al Khaimah' ? 'RAK-' : (
                            $request->emirates === 'Fujairah' ? 'FUJ-' : (
                                $request->emirates === 'Al Ain' ? 'AAN-' : 'AUH-'
                            )
                        )
                    )
                )
            )
        );
        if (isset($request->image))
            $committee->image = $uploadHelper->store('committee', $request->image);
        $committee->save();


        Alert::success('Success', 'New Member Added!');
        return back();
    }
    
}
