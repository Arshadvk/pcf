@extends('dashboard.base')
@section('title')
Add Team | P C F -  People Culture Forum
@endsection
@section('content')
<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Add Team</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">


                                <form class="custom-validation" action="{{ route('postTeam') }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}

                                    <div class="mb-3">
                                        <label class="form-label">Name <span style="color: red">*</span></label>
                                        <input name="name" type="text" class="form-control" required
                                            placeholder="Type something" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Name in Arabic <span
                                                style="color: red">*</span></label>
                                        <input name="name_ar" type="text" class="form-control" required
                                            placeholder="Type something" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Position<span
                                                style="color: red">*</span></label>
                                        <input name="position" type="text" class="form-control" required
                                            placeholder="Type something" />
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label">Position in Arabic <span
                                                style="color: red">*</span></label>
                                        <input name="position_ar" type="text" class="form-control" required
                                            placeholder="Type something" />
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label">Image <span
                                                style="color: red">*</span></label>
                                        <input name="image" type="file" class="form-control" required
                                            placeholder="Type something" />
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
