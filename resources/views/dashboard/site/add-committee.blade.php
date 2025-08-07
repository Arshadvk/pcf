@extends('dashboard.base')
@section('title')
    Add Menu | P C F - People Culture Forum
@endsection
@section('content')
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Add Committee</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-edgray font-normal text-[16px] mb-[10px]">1. Personal Info</p>

                                    <form method="POST" class="custom-validation" action="{{ route('postUser') }}"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
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
                                                    <input id="imageInput" name="image" type="file"
                                                        class="form-control" placeholder="Type something" required />
                                                    <small id="imageError" style="color: red; display: none;">The image must
                                                        be square (equal width and height).</small>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emirates" class="form-label">Select Emirate</label>
                                                    <select name="emirates" id="emirates" class="form-control" required>
                                                        <option value="" disabled selected>Select your Emirate
                                                        </option>
                                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                                        <option value="Al Ain">Al Ain</option>
                                                        <option value="Dubai">Dubai</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>
                                                        <option value="Umm Al Quwain">Umm Al-Quwain</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Fujairah">Fujairah</option>
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

    <script>
        document.getElementById('imageInput').addEventListener('change', function() {
            const file = this.files[0];
            const imageError = document.getElementById('imageError');

            if (file) {
                const img = new Image();
                img.src = URL.createObjectURL(file);
                img.onload = function() {
                    if (img.width !== img.height) {
                        imageError.style.display = 'block';
                        document.getElementById('imageInput').value = ''; // Clear the input
                    } else {
                        imageError.style.display = 'none';
                    }
                };
            }
        });
    </script>
@endsection
