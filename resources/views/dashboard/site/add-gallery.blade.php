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
                                <h4 class="mb-sm-0">Add Gallery</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="custom-validation" method="POST" action="{{ route('store-gallery') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                            <label class="form-label">Title <span style="color: red">*</span></label>
                                            <input type="text" name="title" class="form-control" 
                                                placeholder="Enter title here" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Image <span style="color: red">*</span></label>
                                            <input name="image" type="file" class="form-control" required />
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
