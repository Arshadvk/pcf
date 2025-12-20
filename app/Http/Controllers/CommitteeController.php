<?php

namespace App\Http\Controllers;

use App\Actions\UploadHelper;
use App\Models\Committee;
use App\Models\Emirate;
use App\Models\NationalCommittee;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;


class CommitteeController extends Controller
{
    //

public function index()
{
    $committees = Committee::with(['position1', 'emirate'])
        ->where('committee_type', 'emirates')->get();
    $user = auth()->user();

    Log::info($committees); // For debugging, optional

    return view('dashboard.site.list-committee', compact('committees', 'user'));
}

public function listGlobalCommitte()
{
    $committees = Committee::with(['position1'])
        ->where('committee_type', 'national')->get();
    $user = auth()->user();

    Log::info($committees); // For debugging, optional

    return view('dashboard.site.list-global-committee', compact('committees', 'user'));
}

    public function listPdpLeaders()
    {
        $committees = Committee::with(['position1'])
            ->where('committee_type', 'leaders')->get();
        $user = auth()->user();

        Log::info($committees); // For debugging, optional

        return view('dashboard.site.list-pdp-leaders', compact('committees', 'user'));
    }


    public function list()
    {
        return $this->index();
    }

    public function create()
    {
        $user = Auth::user();
        $positions = Position::all();
        $emirates = Emirate::all();
        return view('dashboard.site.add-committee', compact('user', 'positions', 'emirates'));
    }

    public function createNational()
    {
        $user = Auth::user();
        $positions = Position::all();
        // $emirates = Emirate::all();
        $globalYears = NationalCommittee::all();
        return view('dashboard.site.add-global-committe', compact('user', 'positions', 'globalYears'));
    }

    public function createLeaders()
    {
        $user = Auth::user();
        $positions = Position::all();
        // $emirates = Emirate::all();
        // $globalYears = NationalCommittee::all();
        return view('dashboard.site.add-pdp-leaders', compact('user', 'positions'));
    }

   public function store(Request $request, UploadHelper $uploadHelper)
    {
        $isUpdate = $request->filled('id');

        // Base rules
        $rules = [
            'name' => 'required|string',
            'committee_type' => 'required|in:emirates,leaders,national',
            'position_id' => 'required|exists:positions,id',
            'image' => $isUpdate ? 'nullable|mimes:jpeg,jpg,png,gif,heic,webp'
                                : 'required|mimes:jpeg,jpg,png,gif,heic,webp',
        ];

        // Conditional rules
        if ($request->committee_type === 'emirates') {
            $rules['emirates'] = 'required|exists:emirates,id';
        }

        if ($request->committee_type === 'national') {
            $rules['national_committee_id'] = 'required|exists:national_committees,id';
        }

        $validated = $request->validate($rules);

        // Get model
        $committee = $isUpdate
            ? Committee::findOrFail($request->id)
            : new Committee();

        // Assign values
        $committee->committee_type = $validated['committee_type'] ?? null;
        $committee->name = $validated['name'];
        $committee->position_id = $validated['position_id'] ?? null;

        if (isset($validated['emirates'])) {
            $committee->emirates = $validated['emirates'] ?? null;
        }

        if (isset($validated['national_committee_id'])) {
            $committee->national_committee_id = $validated['national_committee_id'] ?? null;
        }

        // Image upload
        if ($request->hasFile('image')) {     
            $committee->image = $uploadHelper->store('committee', $request->file('image'));
        }

        $committee->save();

        Alert::success('Success', $isUpdate ? 'Member Updated!' : 'New Member Added!');
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

    public function editPdpLeaders($id)
    {
        $user = Auth::user();
        $committee = Committee::findOrFail($id);
        $positions = Position::all();

        return view('dashboard.site.edit-pdp-leader', compact('user', 'committee', 'positions'));
    }

    public function editCommittee($id)
    {
        $user = Auth::user();
        $emirates = Emirate::all();
        $committee = Committee::findOrFail($id);
        $positions = Position::all();

        return view('dashboard.site.edit-committee', compact('user', 'committee', 'emirates', 'positions'));
    }

    public function editGlobal($id)
    {
        $user = Auth::user();
        $globalYears = NationalCommittee::all();
        $committee = Committee::findOrFail($id);
        $positions = Position::all();

        return view('dashboard.site.edit-global', compact('user', 'committee', 'globalYears', 'positions'));
    }
}
