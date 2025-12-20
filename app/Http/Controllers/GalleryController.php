<?php

namespace App\Http\Controllers;

use App\Actions\UploadHelper;
use App\Models\Emirate;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{   
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.site.add-gallery', compact('user'));
    }

    public function list()
    {
        $user = Auth::user();
        $emirates = Emirate::all();
        $galleries = Gallery::when($user->emirates_id, function ($query) use ($user) {
            // User has emirate → show only that emirate's galleries
            $query->where('emirates', $user->emirates_id);
        }, function ($query) {
            // User emirate is NULL → show all, NULL first
            $query->orderByRaw('emirates IS NOT NULL')
                  ->orderBy('emirates', 'asc')
                  ->orderBy('id', 'asc');
        })
        ->get();
        return view('dashboard.site.list-gallery', compact('user', 'galleries', 'emirates'));
    }

    public function store(Request $request, UploadHelper $uploadHelper)
    {
        
        if (!isset($request->id)) {

            $request->validate([
                "cropped_image" => "required|mimes:jpeg,jpg,png,gif,heic,webp|max:2048",
            ]);
        }

        $gallery = null;

        if (isset($request->id)) {
            $gallery = Gallery::findOrFail($request->id);
            if (!$gallery)
                return redirect()->back()->with('error', 'Listing Not Found!');
        } else {
            $gallery = new Gallery();
        }

        if (isset($request->title))
            $gallery->title = $request->title;
        if (isset($request->url))
            $gallery->url = $request->url;

        if (isset($request->emirates))
            $gallery->emirates = $request->emirates;

        if (isset($request->cropped_image))
            $gallery->image = $uploadHelper->store('gallery', $request->cropped_image);
        $gallery->save();


        Alert::success('Success', 'gallery Added!');
        return response()->json([
            'success' => true,
            'message' => 'Gallery Added!'
        ]);
    }

    // public function delete($id)
    // {
    //     $gallery = Gallery::findorFail($id);

    //     $isSuccess = $gallery->delete();

    //     if ($isSuccess) {
    //         $this->imageDeleteHandler($gallery);
    //     }

    //     Alert::success('Success', 'Gallery Removed!');
    //     return back();
    // }


    public function delete($id)
{
    $gallery = Gallery::find($id);
    
    if (!$gallery) {
        return redirect()->back()->with('error', 'Gallery item not found.');
    }

    // Optional: delete image file from storage if needed
    // Storage::delete($gallery->image);

    $gallery->delete();

    return redirect()->back()->with('success', 'Gallery item deleted successfully.');
}


    private function imageDeleteHandler($gallery)
    {
        $images = array(
            $gallery->image,
        );
        foreach ($images as $image) {
            if (file_exists($image)) {
                unlink($image);
            }
        }
    }
}
