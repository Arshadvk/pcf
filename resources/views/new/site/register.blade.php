@extends('new.base')
@section('title')

@endsection
@section('content')

<style>
   

    #cropModal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .text-danger {
    color: red;
    font-size: 12px;
    margin-top: 5px;
}

</style>


<section class="contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div  class="col col-lg-5 col-md-6 col-sm-8">
                <div class="section-title">
                    {{-- <img style="height: 90px;" src="assets/img/logo.png" alt="" srcset=""> --}}
                    <h2>Application for Membership</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-12">

                <form method="POST" action="{{ route('postUser') }}" class="contact-validation-active" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Your Name</label>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
                    </div>
                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Your Email</label>
                        <input type="email" name="email"  placeholder="Enter Your Email" class="form-control" required>
                    </div>

                    <div>
                        <label class="font-lato font-semibold text-edblue block mb-[12px]">Tel/Mob</label>
                        <input type="number" name="mobile"  placeholder="Enter Your Tel/Mob" class="form-control" required>
                    </div>
                    <div>
                        <label class="font-lato font-semibold text-edblue block mb-[12px]">Date of Birth</label>
                        <input 
                            type="text" 
                            name="dob" 
                            id="dob" 
                            placeholder="DD/MM/YYYY" 
                            class="form-control" 
                            required 
                            maxlength="10" 
                            pattern="\d{2}/\d{2}/\d{4}" 
                            title="Enter the date in DD/MM/YYYY format (e.g., 25/12/2000)">
                        <small id="dobError" class="text-danger" style="display: none;">Please enter a valid date in DD/MM/YYYY format.</small>
                    </div>

                    
                    <div>
                        <label class="font-lato font-semibold text-edblue block mb-[12px]">WhatsApp No </label>
                        <input type="text" name="whatsapp"  placeholder="Enter Your Whatsapp No" class="form-control" required>
                    </div>
                    <div>
                        <label for="blood-group" class="font-lato font-semibold text-edblue block mb-[12px]">Blood Group</label>
                        <select name="blood_group" id="blood_group" class="form-control" required>
                            <option value="" disabled selected>Select your blood group</option>
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
                 


                    <div>
                        <label for="emirates" class="font-lato font-semibold text-edblue block mb-[12px]">Select Emirate</label>
                        <select name="emirates" id="emirates" class="form-control">
                            <option value="" disabled selected>Select your Emirate</option>
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
                    
                    <div>
                        <label for="imageInput" class="font-lato font-semibold text-edblue block mb-[12px]">Photo</label>
                        <input id="imageInput" name="image" type="file" class="form-control" required />
                        <small id="imageError" style="color: red; display: none;">The image must be square (equal width and height).</small>
                    </div>
                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Profession</label>
                        <input type="text" name="profession"  placeholder="Enter Your Profession" class="form-control" required>
                    </div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Zone / Area</label>
                        <input type="text" name="zone"  placeholder="Enter Your Zone" class="form-control" required>
                    </div>

                   
                    <div>
                        <label for="gender" class="font-lato font-semibold text-edblue block mb-[12px]">Gender </label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="" disabled selected>Select your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female </option>

                        </select>
                    </div>
                    
                    <div style="visibility: hidden;">
                        <label for="membership_type" class="font-lato font-semibold text-edblue block mb-[12px]">Membership Type</label>
                        <input value="active" type="text" name="membership_type"  class="form-control" required>
                    </div>
                    

                    <p class="text-edgray font-normal text-[16px] mb-[10px]">2. Address in home country</p>


                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">House Name </label>
                        <input type="text" name="house_name"  placeholder="Enter Your House Name" class="form-control" required>
                    </div>


                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">District</label>
                        <input type="text" name="district"  placeholder="Enter Your District" class="form-control" required> 
                    </div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Panjayath</label>
                        <input type="text" name="panjayath"  placeholder="Enter Your Panjayath" class="form-control" required>
                    </div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">PIN</label>
                        <input type="text" name="pin"  placeholder="Enter Your PIN" class="form-control" required>
                    </div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Mandalam</label>
                        <input type="text" name="mandalam"  placeholder="Enter Your Mandalam" class="form-control" required>
                    </div>

                    

                    <div>
                        <label for="before_pdp" class="font-lato font-semibold text-edblue block mb-[12px]">Before In PDP </label>
                        <select name="before_pdp" id="before_pdp" class="form-control" required>
                            <option value="" disabled selected>Before in PDP</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>

                        </select>
                    </div>

                    <div class="submit-area">
                        <button type="submit" class="theme-btn">Submit Now</button>
                        <div id="loader">
                            <i class="ti-reload"></i>
                        </div>
                    </div>
                    <div class="clearfix error-handling-messages">
                        <div id="success">Thank you</div>
                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                    </div>
                </form>
            </div>                   
        </div>
    </div> <!-- end container -->
</section>
 <!-- Modal for cropping -->
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

document.querySelector('input[name="dob"]').addEventListener('input', function (e) {
    const dobInput = e.target;
    const value = dobInput.value;
    const dobError = document.getElementById('dobError');

    // Allow only numbers and slashes
    if (!/^\d{0,2}(\/\d{0,2}(\/\d{0,4})?)?$/.test(value)) {
        dobInput.value = value.slice(0, -1); // Remove invalid character
    }

    // Validate full date format
    if (/^\d{2}\/\d{2}\/\d{4}$/.test(value)) {
        dobError.style.display = 'none'; // Hide error message if valid
    } else {
        dobError.style.display = 'block'; // Show error message if invalid
    }
});


</script>

@endsection
