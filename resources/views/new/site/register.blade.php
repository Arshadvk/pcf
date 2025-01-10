@extends('new.base')
@section('title')

@endsection
@section('content')

<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>Register</h2>
                <ol class="breadcrumb">
                    <li><a href="">Home</a></li>
                    <li>Register</li>
                </ol>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> 

<section class="py-[120px] xl:py-[80px] md:py-[60px]">
    <div class="container mx-auto max-w-[1200px] px-[12px] xl:max-w-full">
        <div class="grid grid-cols-12 md:grid-cols-12 gap-[60px] xl:gap-[40px] items-center">
            <!-- left side contact infos -->
          
            <!-- right side contact form -->
            <div>
                    <div class="flex items-center justify-center">
                        <img style="height: 90px;" src="assets/img/logo.png" alt="" srcset="">
                    </div>

                <h2 class="text-[40px] md:text-[35px] sm:text-[30px] xxs:text-[28px] text-center font-semibold text-edblue mb-[40px]">Application for Membership</h2>
                
                
                <p class="text-edgray font-normal text-[16px] mb-[10px]">1. Personal Info</p>
                <form method="POST" action="{{ route('postUser') }}" class="grid grid-cols-2 xxs:grid-cols-1 gap-[30px] xs:gap-[20px] text-[16px]" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Your Name</label>
                        <input type="text" name="name" placeholder="Enter Your Name" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>
                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Your Email</label>
                        <input type="email" name="email"  placeholder="Enter Your Email" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>

                    <div>
                        <label class="font-lato font-semibold text-edblue block mb-[12px]">Tel/Mob</label>
                        <input type="number" name="mobile"  placeholder="Enter Your Tel/Mob" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>
                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Date of Birth</label>
                        <input type="text" name="dob"  placeholder="Enter Your Date of Birth" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>

                    
                    <div>
                        <label class="font-lato font-semibold text-edblue block mb-[12px]">WhatsApp No </label>
                        <input type="text" name="whatsapp"  placeholder="Enter Your Whatsapp No" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>
                    <div>
                        <label for="blood-group" class="font-lato font-semibold text-edblue block mb-[12px]">Blood Group</label>
                        <select name="blood_group" id="blood_group" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
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
                        <select name="emirates" id="emirates" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
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
                        <input id="imageInput" name="image" type="file"  class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" placeholder="Type something" required />
                        <small id="imageError" style="color: red; display: none;">The image must be square (equal width and height).</small>
                    </div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Profession</label>
                        <input type="text" name="profession"  placeholder="Enter Your Profession" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Zone / Area</label>
                        <input type="text" name="zone"  placeholder="Enter Your Zone" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>

                    <div>
                        <label for="membership_type" class="font-lato font-semibold text-edblue block mb-[12px]">Membership Type  </label>
                        <select name="membership_type" id="membership_type" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none">
                            <option value="" disabled selected>Select your Membership Type</option>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>

                        </select>
                    </div>

                    <div></div>

                    <div><p class="text-edgray font-normal text-[16px] mb-[10px]">2. Address in home country</p></div>

                    <div></div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">House Name </label>
                        <input type="text" name="house_name"  placeholder="Enter Your House Name" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>


                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">District</label>
                        <input type="text" name="district"  placeholder="Enter Your District" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required> 
                    </div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Panjayath</label>
                        <input type="text" name="panjayath"  placeholder="Enter Your Panjayath" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">PIN</label>
                        <input type="text" name="pin"  placeholder="Enter Your PIN" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>

                    <div>
                        <label  class="font-lato font-semibold text-edblue block mb-[12px]">Mandalam</label>
                        <input type="text" name="mandalam"  placeholder="Enter Your Mandalam" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                    </div>

                    

                    <div>
                        <label for="before_pdp" class="font-lato font-semibold text-edblue block mb-[12px]">Before In PDP </label>
                        <select name="before_pdp" id="before_pdp" class="border border-[#ECECEC] h-[55px] px-[20px] xs:px-[15px] rounded-[4px] w-full focus:outline-none" required>
                            <option value="" disabled selected>Before in PDP</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>

                        </select>
                    </div>

                    <div>
                        <button type="submit" class="bg-edpurple h-[55px] px-[24px] rounded-[10px] text-[16px] font-medium text-white hover:bg-edblue">Send Message <span class="icon pl-[10px]"><i class="fa-solid fa-arrow-right-long"></i></span></button>
                    </div>
                </form>


            </div>
        </div>
    </div>
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
