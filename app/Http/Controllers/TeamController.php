<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Actions\UploadHelper;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UploadHelper $uploadHelper)
    {
       
        if (!isset($request->id)) {
           
            $request->validate([
                "name" => "required",
                "position" => "required",
                "image" => "required|mimes:jpeg,jpg,png,gif,webp|max:2048",
            ]);
        }    
        $teams = null;
        if (isset($request->id)) {
            $teams = Team::findOrFail($request->id);
            if (!$teams)
              return redirect()->back()->with('error', 'Listing Not Found!');
        } else {
            $teams = new Team();
        }
        if (isset($request->name))
            $teams->name = $request->name;
        if (isset($request->name_ar))
            $teams->name_ar = $request->name_ar;
        if (isset($request->position))
            $teams->position = $request->position;
        if (isset($request->position_ar))
            $teams->position_ar = $request->position_ar;
        if (isset($request->image))
            $teams->image = $uploadHelper->store('teams', $request->image);
        $teams->save();

        
        Alert::success('Success', 'Team Added!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, UploadHelper $uploadHelper)
    {
        $request->validate([
            "title" => "required",
            "title_ar" => "nullable",
                "short_description" => "required",
                "description" => "required",
                "image" => "nullable|mimes:jpeg,jpg,png,gif|max:2048",

            
        ]);

        $updteTeam = Team::findorFail($id);

        $updatedAttributes = [
            "title" => "Title Updated",
            "title_ar" => "Arabic Title Updated",
            "short_description" => "Short Description Updated",
            "short_description_ar" => "Arabic Short Description Updated",
            "description" => "Description Updated",
            "description_ar" => "Arabic Description Updated",

        ];

        $updatedMessages = [];


        foreach ($updatedAttributes as $attribute => $message){
            if($request->has($attribute)) {
                $updteTeam->$attribute = $request->get($attribute);
                if($updteTeam->isDirty($attribute)){
                    array_push($updatedMessages, $message);
                }
            }
        }

        if($request->hasFile('image')){
            $updteTeam->image = $uploadHelper->store('teams', $request->image);
            array_push($updatedMessages, "Team Image Updated");
        } else {
            $updteTeam->image = $updteTeam->image;
        }

        $updteTeam->save();

      

        if(count($updatedMessages) > 0) {
            Alert::success('Success', implode(", ", $updatedMessages));
        } else {
            Alert::warning('No changes', 'No Updates made to the team');
        }

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findorFail($id);

        $isSuccess = $team->delete();

        if($isSuccess){
            $this->imageDeleteHandler($team);
        }

        Alert::success('Success', 'Team Removed!');
        return back();
    }

    private function imageDeleteHandler($team)
    {
        $images = array(
            $team->image,
        );
        foreach ($images as $image) {
            if (file_exists($image)) {
                unlink($image);
            }
        }
    }

}