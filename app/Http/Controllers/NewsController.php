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
                "title" => "required",
                "short_description" => "required",
                "description" => "required",
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
        if (isset($request->title))
            $news->title = $request->title;
        if (isset($request->short_description))
            $news->short_description = $request->short_description;
        if (isset($request->description))
            $news->description = $request->description;
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

        $updteBlog = News::findorFail($id);

        $updatedAttributes = [
            "title" => "Title Updated",
            "short_description" => "Short Description Updated",
            "description" => "Description Updated",
        ];

        $updatedMessages = [];


        foreach ($updatedAttributes as $attribute => $message) {
            if ($request->has($attribute)) {
                $updteBlog->$attribute = $request->get($attribute);
                if ($updteBlog->isDirty($attribute)) {
                    array_push($updatedMessages, $message);
                }
            }
        }

        if ($request->hasFile('image')) {
            $updteBlog->image = $uploadHelper->store('blog', $request->image);
            array_push($updatedMessages, "Blog Image Updated");
        } else {
            $updteBlog->image = $updteBlog->image;
        }

        $updteBlog->save();

        if (count($updatedMessages) > 0) {
            Alert::success('Success', implode(", ", $updatedMessages));
        } else {
            Alert::warning('No changes', 'No Updates made to the blog');
        }

        return back();
    }


    public function destroy($id)
    {
        $blog = News::findorFail($id);

        $isSuccess = $blog->delete();

        if ($isSuccess) {
            $this->imageDeleteHandler($blog);
        }

        Alert::success('Success', 'Blog Removed!');
        return back();
    }

    private function imageDeleteHandler($blog)
    {
        $images = array(
            $blog->image,
        );
        foreach ($images as $image) {
            if (file_exists($image)) {
                unlink($image);
            }
        }
    }
}
