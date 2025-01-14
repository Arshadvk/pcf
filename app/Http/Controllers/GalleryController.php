<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\UploadHelper;
use App\Models\Gallery;
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
        $galleries = Gallery::orderby('id', 'asc')->get();
        return view('dashboard.site.list-gallery', compact('user', 'galleries'));
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
        if (isset($request->cropped_image))
            $gallery->image = $uploadHelper->store('gallery', $request->cropped_image);
        $gallery->save();


        Alert::success('Success', 'gallery Added!');
        return back();
    }

    public function destroy($id)
    {
        $gallery = Gallery::findorFail($id);

        $isSuccess = $gallery->delete();

        if ($isSuccess) {
            $this->imageDeleteHandler($gallery);
        }

        Alert::success('Success', 'Gallery Removed!');
        return back();
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
