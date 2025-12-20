@extends('dashboard.base')
@section('title')
    Add Menu | P C F - People Culture Forum
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Add PDP Leaders</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-edgray font-normal text-[16px] mb-[10px]">1. Personal Info</p>

                                    <form method="POST" class="custom-validation" action="/store-committee"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Name <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Type something" required />
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Photo <span
                                                            style="color: red">*</span></label>
                                                   <input id="imageInput" type="file" class="form-control"  name="image" accept="image/*" required />
                                                </div>
                                            </div>

                                        </div>
                                        <input type="hidden" name="committee_type" class="form-control"
                                                        value="leaders"  />
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="position" class="form-label">Position</label>
                                                    <select name="position_id" id="position" class="form-control" required>
                                                        <option value="" disabled selected>Select Position</option>
                                                        @foreach ($positions as $pos)
                                                            <option value="{{ $pos->id }}">{{ $pos->name_mal }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                        </div>



                                        <div>
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light me-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-secondary waves-effect">Cancel</button>
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
