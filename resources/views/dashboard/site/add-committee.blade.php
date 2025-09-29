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
                                <h4 class="mb-sm-0">Add Committee</h4>
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
                                                   <input id="imageInput" type="file" class="form-control" accept="image/*" required />
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

                                                        @foreach ($emirates as $emirate)
                                                            <option value="{{ $emirate->id }}">{{ $emirate->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>


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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" />
    
    <script>
        let cropper;
    
        document.getElementById('imageInput').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const imagePreview = document.getElementById('imagePreview');
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
    
                    // Destroy any existing Cropper instance before initializing a new one
                    if (cropper) cropper.destroy();
    
                    cropper = new Cropper(imagePreview, {
                        aspectRatio: 16 / 9,
                        viewMode: 1,
                        autoCropArea: 1,
                    });
                };
                reader.readAsDataURL(file);
            }
        });
    
        document.getElementById('cropButton').addEventListener('click', function () {
            if (cropper) {
                cropper.getCroppedCanvas().toBlob((blob) => {
                    const formData = new FormData();
                    formData.append('title', document.querySelector('[name="title"]').value);
                    formData.append('cropped_image', blob, 'cropped_image.png');
    
                    // Submit the form data using AJAX
                    fetch('{{ route('store-gallery') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                    })
                        .then((response) => response.json())
                        .then((data) => {
                            console.log(data);
                            alert('Image uploaded successfully!');
                            const imagePreview = document.getElementById('imagePreview');
                            imagePreview.style.display = 'none';
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                            alert('Image uploaded successfully!');
                            const imagePreview = document.getElementById('imagePreview');
                            imagePreview.style.display = 'none';

                        });
                });
            } else {
                alert('Please select an image to crop.');
            }
        });
    </script>
@endsection
