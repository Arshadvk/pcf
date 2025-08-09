<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;
use App\Actions\UploadHelper;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class CommitteeController extends Controller
{
    //

public function index()
{
    $committees = Committee::with(['position', 'emirate'])->get();
    $user = auth()->user();

    Log::info($committees); // For debugging, optional

    return view('dashboard.site.list-committee', compact('committees', 'user'));
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
                "emirates" => "required|exists:emirates,id",
                "position_id" => "required|exists:positions,id",
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
        if (isset($request->image))
            $committee->image = $uploadHelper->store('committee', $request->image);
        if (isset($request->position_id))
            $committee->position_id = $request->position_id;

        $committee->save();


        Alert::success('Success', 'New Member Added!');
        return back();
    }


    public function delete($id)
{
    $committee = Committee::find($id);

    if (!$committee) {
        return redirect()->back()->with('error', 'Committee member not found.');
    }

    $committee->delete();

    return redirect()->back()->with('success', 'Committee member deleted successfully.');
}
}
