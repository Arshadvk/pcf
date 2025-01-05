@extends('dashboard.base')
@section('title')
    Add Blog | La Bistro Caffe
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
                                    <form class="custom-validation" action="{{ route('postBlog') }}" method="POST"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="mb-3">
                                            <label class="form-label">Title <span style="color: red">*</span></label>
                                            <input type="text" name="title" class="form-control" required
                                                placeholder="Enter title here" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Title in Arabic <span
                                                    style="color: red">*</span></label>
                                            <input type="text" name="title_ar" class="form-control" required
                                                placeholder="Enter title in arabic" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Short Description <span
                                                    style="color: red">*</span></label>
                                            <input type="text" name="short_description" class="form-control" required
                                                placeholder="Enter Short Description" />
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">Short Description in Arabic <span
                                                    style="color: red">*</span></label>
                                            <input type="text" name="short_description_ar" class="form-control" required
                                                placeholder="Enter Short Description in Arabic" />
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">Image <span style="color: red">*</span></label>
                                            <input name="image" type="file" class="form-control" required />
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">Description <span style="color: red">*</span> </label>
                                            <div>
                                                <textarea name="description" placeholder="Enter Description" required class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Description in Arabic <span
                                                    style="color: red">*</span></label>
                                            <div>
                                                <textarea name="description_ar" placeholder="Enter Description in Arabic" required class="form-control" rows="5"></textarea>
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
