<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Actions\UploadHelper;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
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
                "title" => "required",
                "short_description" => "required",
                "description" => "required",
                "image" => "required|mimes:jpeg,jpg,png,gif,heic,webp|max:2048",
            ]);
        }    
        $blogs = null;
        if (isset($request->id)) {
            $blogs = Blog::findOrFail($request->id);
            if (!$blogs)
              return redirect()->back()->with('error', 'Listing Not Found!');
        } else {
            $blogs = new Blog();
        }
        if (isset($request->title))
            $blogs->title = $request->title;
        if (isset($request->title_ar))
            $blogs->title_ar = $request->title_ar;
        if (isset($request->short_description))
            $blogs->short_description = $request->short_description;
        if (isset($request->short_description_ar))
            $blogs->short_description_ar = $request->short_description_ar;
        if (isset($request->description))
            $blogs->description = $request->description;
        if (isset($request->description_ar))
            $blogs->description_ar = $request->description_ar;
        if (isset($request->image))
            $blogs->image = $uploadHelper->store('blogs', $request->image);
        $blogs->save();

        
        Alert::success('Success', 'Blog Added!');
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

        $updteBlog = Blog::findorFail($id);

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
                $updteBlog->$attribute = $request->get($attribute);
                if($updteBlog->isDirty($attribute)){
                    array_push($updatedMessages, $message);
                }
            }
        }

        if($request->hasFile('image')){
            $updteBlog->image = $uploadHelper->store('blog', $request->image);
            array_push($updatedMessages, "Blog Image Updated");
        } else {
            $updteBlog->image = $updteBlog->image;
        }

        $updteBlog->save();

        // $user = User::where('role', 'A')->first();
        // $message = "Updated Successfully!";
        // $user->notify(new UpdateAgent($updteBlog, $message));

        if(count($updatedMessages) > 0) {
            Alert::success('Success', implode(", ", $updatedMessages));
        } else {
            Alert::warning('No changes', 'No Updates made to the blog');
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
        $blog = Blog::findorFail($id);

        $isSuccess = $blog->delete();

        if($isSuccess){
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
