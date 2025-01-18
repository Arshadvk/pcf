@extends('dashboard.base')
@section('title')
    Add Menu | P C F - People Culture Forum
@endsection
@section('content')
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">


                @if ($user->type === 'super')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Edit User</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                            

                                        <form method="POST" class="custom-validation"
                                            action="{{ route('putUser', $member->id) }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Membership Number <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" name="membership_number"
                                                            value="{{ $member->membership_number }}" class="form-control"
                                                            placeholder="Type something" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="membership_type" class="form-label">Membership
                                                            Type</label>
                                                        <select name="membership_type" id="membership_type"
                                                            class="form-control">
                                                            <option value="{{ $member->membership_type }}" disabled
                                                                selected>{{ $member->membership_type }}</option>
                                                            <option value="primary">Primary</option>
                                                            <option value="secondary">Secondary</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Membership Expiry <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" name="expiry" value="{{ $member->expiry }}"
                                                            class="form-control" placeholder="Type something" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Membership Issued <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" name="issued" value="{{ $member->issued }}"
                                                            class="form-control" placeholder="Type something" required />
                                                    </div>
                                                </div>
                                            </div>


                                            <div style="display: none">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class=" mb-3">
                                                            <label class="form-label">Your Name <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" name="name" value="{{ $member->name }}"
                                                                class="form-control" placeholder="Type something" required />
                                                        </div>
                                                    </div>
        
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Your Email <span
                                                                    style="color: red">*</span></label>
                                                            <input type="email" name="email" value="{{ $member->email }}"
                                                                class="form-control" placeholder="Type something" required />
                                                        </div>
                                                    </div>
                                                </div>
        
        
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Tel/Mob <span
                                                                    style="color: red">*</span></label>
                                                            <input type="number" name="mobile" value="{{ $member->mobile }}"
                                                                class="form-control" placeholder="Type something" required />
                                                        </div>
                                                    </div>
        
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Date of Birth <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" name="dob" value="{{ $member->dob }}"
                                                                class="form-control" placeholder="Type something" required />
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">WhatsApp No <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" name="whatsapp"
                                                                value="{{ $member->whatsapp }}" class="form-control"
                                                                placeholder="Type something" required />
                                                        </div>
                                                    </div>
        
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="blood-group" class="form-label">Blood Group</label>
                                                            <select name="blood_group" id="blood_group" class="form-control"
                                                                required>
                                                                <option value="{{ $member->blood_group }}" disabled selected>
                                                                    {{ $member->blood_group }}</option>
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="emirates" class="form-label">Select Emirate <span
                                                                    style="color: red">*</span></label>
                                                            <select name="emirates" id="emirates" class="form-control" required>
                                                                <option value="{{ $member->emirates }}" disabled selected>
                                                                    {{ $member->emirates }}</option>
                                                                <option value="Abu Dhabi">Abu Dhabi</option>
                                                                <option value="Dubai">Dubai</option>
                                                                <option value="Sharjah">Sharjah</option>
                                                                <option value="Ajman">Ajman</option>
                                                                <option value="Umm Al Quwain">Umm Al-Quwain</option>
                                                                <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                                <option value="Fujairah">Fujairah</option>
                                                            </select>
                                                        </div>
                                                    </div>
        
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Profession <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" name="profession"
                                                                value="{{ $member->profession }}" class="form-control"
                                                                placeholder="Type something" required />
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <p class="text-edgray font-normal text-[16px] mb-[10px]">2. Address in home
                                                    country</p>
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">House Name <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" name="house_name"
                                                                value="{{ $member->house_name }}" class="form-control"
                                                                placeholder="Type something" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">District <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" name="district"
                                                                value="{{ $member->district }}" class="form-control"
                                                                placeholder="Type something" required />
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Panjayath <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" name="panjayath"
                                                                value="{{ $member->panjayath }}" class="form-control"
                                                                placeholder="Type something" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">PIN <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" name="pin" value="{{ $member->pin }}"
                                                                class="form-control" placeholder="Type something" required />
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Mandalam <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" name="mandalam"
                                                                value="{{ $member->mandalam }}" class="form-control"
                                                                placeholder="Type something" required />
                                                        </div>
                                                    </div>
        
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="before_pdp" class="form-label">Before In PDP
                                                            </label>
                                                            <select name="before_pdp" id="before_pdp" class="form-control">
                                                                <option value="{{ $member->before_pdp }}" disabled selected>
                                                                    {{ $member->before_pdp }}</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
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
                @endif

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">View MemberData</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-edgray font-normal text-[16px] mb-[10px]">Member Image</p>
                                        <img src="{{$member->image}}" width="200" alt="" srcset="">

                                    <form method="POST" class="custom-validation"
                                        action="{{ route('update_photo', $member->id) }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="my-3">
                                                        <label for="imageInput" class="font-lato font-semibold text-edblue block mb-[12px]">Photo</label>
                                                        <input id="imageInput" name="image" type="file" class="form-control" required />
                                                        <small id="imageError" style="color: red; display: none;">The image must be square (equal width and height).</small>
                                                </div>
                                            </div>
                                        </div>


                                        <div>
                                            @if ($user->type === 'admin' && $member->status !== "approved")
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light me-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-secondary waves-effect">Cancel</button>
                                                </div>
                                            @endif

                                            @if ($user->type === 'super' && $member->status == "approved")
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light me-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-secondary waves-effect">Cancel</button>
                                            </div>
                                            @endif
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-edgray font-normal text-[16px] mb-[10px]">1. Personal Info</p>
                                    <form method="POST" class="custom-validation"
                                        action="{{ route('putUser', $member->id) }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <label class="form-label">Your Name <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="name" value="{{ $member->name }}"
                                                        class="form-control" placeholder="Type something" required />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email <span
                                                            style="color: red">*</span></label>
                                                    <input type="email" name="email" value="{{ $member->email }}"
                                                        class="form-control" placeholder="Type something" required />
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Tel/Mob <span
                                                            style="color: red">*</span></label>
                                                    <input type="number" name="mobile" value="{{ $member->mobile }}"
                                                        class="form-control" placeholder="Type something" required />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Date of Birth <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="dob" value="{{ $member->dob }}"
                                                        class="form-control" placeholder="Type something" required />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">WhatsApp No <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="whatsapp"
                                                        value="{{ $member->whatsapp }}" class="form-control"
                                                        placeholder="Type something" required />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="blood-group" class="form-label">Blood Group</label>
                                                    <select name="blood_group" id="blood_group" class="form-control"
                                                        required>
                                                        <option value="{{ $member->blood_group }}" disabled selected>
                                                            {{ $member->blood_group }}</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emirates" class="form-label">Select Emirate <span
                                                            style="color: red">*</span></label>
                                                    <select name="emirates" id="emirates" class="form-control" required>
                                                        <option value="{{ $member->emirates }}" disabled selected>
                                                            {{ $member->emirates }}</option>
                                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                                        <option value="Dubai">Dubai</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>
                                                        <option value="Umm Al Quwain">Umm Al-Quwain</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Fujairah">Fujairah</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Profession <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="profession"
                                                        value="{{ $member->profession }}" class="form-control"
                                                        placeholder="Type something" required />
                                                </div>
                                            </div>
                                        </div>


                                        <p class="text-edgray font-normal text-[16px] mb-[10px]">2. Address in home
                                            country</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">House Name <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="house_name"
                                                        value="{{ $member->house_name }}" class="form-control"
                                                        placeholder="Type something" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">District <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="district"
                                                        value="{{ $member->district }}" class="form-control"
                                                        placeholder="Type something" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Panjayath <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="panjayath"
                                                        value="{{ $member->panjayath }}" class="form-control"
                                                        placeholder="Type something" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">PIN <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="pin" value="{{ $member->pin }}"
                                                        class="form-control" placeholder="Type something" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Mandalam <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="mandalam"
                                                        value="{{ $member->mandalam }}" class="form-control"
                                                        placeholder="Type something" required />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="before_pdp" class="form-label">Before In PDP
                                                    </label>
                                                    <select name="before_pdp" id="before_pdp" class="form-control">
                                                        <option value="{{ $member->before_pdp }}" disabled selected>
                                                            {{ $member->before_pdp }}</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="display: none">

                                            <div class="row" >
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Membership Number <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" name="membership_number"
                                                            value="{{ $member->membership_number }}" class="form-control"
                                                            placeholder="Type something" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="membership_type" class="form-label">Membership
                                                            Type</label>
                                                        <select name="membership_type" id="membership_type"
                                                            class="form-control">
                                                            <option value="{{ $member->membership_type }}" disabled
                                                                selected>{{ $member->membership_type }}</option>
                                                            <option value="primary">Primary</option>
                                                            <option value="secondary">Secondary</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Membership Expiry <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" name="expiry"
                                                            value="{{ $member->expiry }}" class="form-control"
                                                            placeholder="Type something" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Membership Issued <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" name="issued"
                                                            value="{{ $member->issued }}" class="form-control"
                                                            placeholder="Type something" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            @if ($user->type === 'admin' && $member->status !== "approved")
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light me-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-secondary waves-effect">Cancel</button>
                                                </div>
                                            @endif

                                            @if ($user->type === 'super' && $member->status == "approved")
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light me-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-secondary waves-effect">Cancel</button>
                                            </div>
                                            @endif
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


    <div id="cropModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 1000; align-items: center; justify-content: center;">
        <div style="background: white; padding: 20px; border-radius: 10px; text-align: center; max-width: 90%; max-height: 90%;">
            <h2>Crop Your Image</h2>
            <img id="cropImage" style="max-width: 100%; max-height: 400px;" />
            <br />
            <button id="cropButton" class="theme-btn">Crop & Save</button>
            <button id="cancelButton" class="theme-btn" style="background-color: red;">Cancel</button>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        let cropper;
        const cropModal = document.getElementById("cropModal");
        const cropImage = document.getElementById("cropImage");
        const imageInput = document.getElementById("imageInput");
        const imageError = document.getElementById("imageError");
        let croppedImageBlob;
    
        // When the user selects an image
        imageInput.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    cropImage.src = e.target.result;
                    cropModal.style.display = "flex"; // Show the modal
                    if (cropper) cropper.destroy(); // Destroy previous instance
                    cropper = new Cropper(cropImage, {
                        aspectRatio: 1, // Square cropping
                        viewMode: 1,
                    });
                };
                reader.readAsDataURL(file);
            }
        });
    
        // Crop and save the image
        document.getElementById("cropButton").addEventListener("click", function () {
            if (cropper) {
                cropper.getCroppedCanvas().toBlob((blob) => {
                    croppedImageBlob = blob;
    
                    // Create a file-like object for submission
                    const dataTransfer = new DataTransfer();
                    const croppedFile = new File([blob], "cropped-image.png", { type: "image/png" });
                    dataTransfer.items.add(croppedFile);
                    imageInput.files = dataTransfer.files; // Replace the file input value
    
                    cropModal.style.display = "none"; // Hide the modal
                });
            }
        });
    
        // Cancel cropping
        document.getElementById("cancelButton").addEventListener("click", function () {
            cropModal.style.display = "none"; // Hide the modal
            imageInput.value = ""; // Clear the input
        });
    });
    
    </script>
@endsection
