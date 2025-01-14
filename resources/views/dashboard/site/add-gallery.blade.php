@extends('dashboard.base')
@section('title')
    Add News | P C F - People Culture Forum
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
                                            <input type="text" name="title" class="form-control" placeholder="Enter title here" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Image <span style="color: red">*</span></label>
                                            <input id="imageInput" type="file" class="form-control" accept="image/*" required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Preview & Crop</label>
                                            <div>
                                                <img id="imagePreview" style="max-width: 100%; display: none;" />
                                            </div>
                                        </div>
                                        <input type="hidden" name="cropped_image" id="croppedImage">
                                        <div>
                                            <button type="button" id="cropButton" class="btn btn-success">Submit</button>
                                            <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
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
