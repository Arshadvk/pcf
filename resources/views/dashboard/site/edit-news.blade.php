@extends('dashboard.base')
@section('title')
    Add News | P C F - People Culture Forum
@endsection
@section('content')
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Add News</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="custom-validation" method="POST" action="{{ route('store-news') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="mb-3">
                                            <label class="form-label">Title <span style="color: red">*</span></label>
                                            <input type="text" name="title" value="{{$news->title}}" class="form-control" required
                                                placeholder="Enter title here" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Short Description <span
                                                    style="color: red">*</span></label>
                                            <input type="text" name="short_description" value="{{$news->short_description}}" class="form-control" required
                                                placeholder="Enter Short Description" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Image <span style="color: red">*</span></label>
                                            
                                            <!-- File Input -->
                                            <input name="image" type="file" class="form-control" required />
                                        
                                            <!-- Preview of Existing Image -->
                                            @if (!empty($news->image))
                                                <div class="mt-2">
                                                    <img src="{{$news->image}}" alt="Current Image" style="max-width: 150px; height: auto; border: 1px solid #ccc; padding: 5px;" />
                                                </div>
                                            @endif
                                        </div>
                                        


                                        <div class="mb-3">
                                            <label class="form-label">Description <span style="color: red">*</span> </label>
                                            <div>
                                                <textarea name="description" placeholder="Enter Description" required class="form-control" rows="5">{{ $news->description }}</textarea>
                                            </div>
                                        </div>


                                        <div>
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light me-1">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
