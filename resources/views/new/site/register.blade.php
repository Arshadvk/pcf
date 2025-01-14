@extends('new.base')
@section('title')

@endsection
@section('content')



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
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Date of Birth</label>
                        <input type="text" name="dob"  placeholder="Enter Your Date of Birth" class="form-control" required>
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
                            <option value="Dubai">Dubai</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Ajman">Ajman</option>
                            <option value="Umm Al Quwain">Umm Al-Quwain</option>
                            <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                            <option value="Fujairah">Fujairah</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="font-lato font-semibold text-edblue block mb-[12px]">Photo</label>
                        <input id="imageInput" name="image" type="file"  class="form-control" placeholder="Type something" required />
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
                        <label for="membership_type" class="font-lato font-semibold text-edblue block mb-[12px]">Membership Type  </label>
                        <select name="membership_type" id="membership_type" class="form-control">
                            <option value="" disabled selected>Select your Membership Type</option>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>

                        </select>
                    </div>

                    <div>
                        <label for="gender" class="font-lato font-semibold text-edblue block mb-[12px]">Gender  </label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="" disabled selected>Select your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female </option>

                        </select>
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

<script>
    document.getElementById('imageInput').addEventListener('change', function () {
        const file = this.files[0];
        const imageError = document.getElementById('imageError');

        if (file) {
            const img = new Image();
            img.src = URL.createObjectURL(file);
            img.onload = function () {
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
