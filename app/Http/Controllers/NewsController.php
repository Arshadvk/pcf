<?php

namespace App\Http\Controllers;

use App\Actions\UploadHelper;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.site.add-news', compact('user'));
    }

    public function list()
    {
        $user = Auth::user();
        $news = News::orderby('id', 'asc')->get();
        return view('dashboard.site.list-news', compact('user', 'news'));
    }

    public function store(Request $request, UploadHelper $uploadHelper)
    {
        if (!isset($request->id)) {

            $request->validate([
                "image" => "required|mimes:jpeg,jpg,png,gif,heic,webp|max:2048",
            ]);
        }
        $news = null;
        if (isset($request->id)) {
            $news = News::findOrFail($request->id);
            if (!$news)
                return redirect()->back()->with('error', 'Listing Not Found!');
        } else {
            $news = new News();
        }
        if (isset($request->image))
            $news->image = $uploadHelper->store('news', $request->image);
        $news->save();


        Alert::success('Success', 'News Added!');
        return back();
    }

    public function edit($id)
    {
        $user = Auth::user();
        $news = News::findOrFail($id);

        return view('dashboard.site.edit-news', compact('user', 'news'));
    }

    public function update(Request $request, $id, UploadHelper $uploadHelper)
    {
        $request->validate([
            "title" => "required",
            "short_description" => "required",
            "description" => "required",
            "image" => "nullable|mimes:jpeg,jpg,png,gif|max:2048",
        ]);

        $updtenews = News::findorFail($id);

        $updatedAttributes = [
            "title" => "Title Updated",
            "short_description" => "Short Description Updated",
            "description" => "Description Updated",
        ];

        $updatedMessages = [];


        foreach ($updatedAttributes as $attribute => $message) {
            if ($request->has($attribute)) {
                $updtenews->$attribute = $request->get($attribute);
                if ($updtenews->isDirty($attribute)) {
                    array_push($updatedMessages, $message);
                }
            }
        }

        if ($request->hasFile('image')) {
            $updtenews->image = $uploadHelper->store('news', $request->image);
            array_push($updatedMessages, "news Image Updated");
        } else {
            $updtenews->image = $updtenews->image;
        }

        $updtenews->save();

        if (count($updatedMessages) > 0) {
            Alert::success('Success', implode(", ", $updatedMessages));
        } else {
            Alert::warning('No changes', 'No Updates made to the news');
        }

        return back();
    }


    public function delete($id)
    {
        $news = News::findorFail($id);

        $isSuccess = $news->delete();

        if ($isSuccess) {
            $this->imageDeleteHandler($news);
        }

        Alert::success('Success', 'news Removed!');
        return back();
    }

    private function imageDeleteHandler($news)
    {
        $images = array(
            $news->image,
        );
        foreach ($images as $image) {
            if (file_exists($image)) {
                unlink($image);
            }
        }
    }
}
