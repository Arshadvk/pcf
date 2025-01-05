@extends('dashboard.base')
@section('title')
    Add Menu | P C F -  People Culture Forum 
@endsection
@section('content')
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
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
                                    
                                    <p class="text-edgray font-normal text-[16px] mb-[10px]">1. Personal Info</p>
                                    <form method="POST" class="custom-validation" action="{{ route('putUser' , $member->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class=" mb-3">
                                                <label class="form-label">Your Name <span style="color: red">*</span></label>
                                                <input type="text" name="name" value="{{$member->name}}" class="form-control" placeholder="Type something" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span style="color: red">*</span></label>
                                                <input type="email" name="email" value="{{$member->email}}" class="form-control" placeholder="Type something"  required />
                                            </div>
                                        </div>
                                    </div>
                                   

                                        
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Tel/Mob <span style="color: red">*</span></label>
                                                <input type="number" name="mobile" value="{{$member->mobile}}" class="form-control" placeholder="Type something" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Date of Birth <span style="color: red">*</span></label>
                                                <input type="text" name="dob" value="{{$member->dob}}" class="form-control"  placeholder="Type something" required />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">WhatsApp No  <span style="color: red">*</span></label>
                                                <input type="text" name="whatsapp" value="{{$member->whatsapp}}" class="form-control"  placeholder="Type something" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="blood-group" class="form-label" >Blood Group</label>
                                                <select  name="blood_group" id="blood_group" class="form-control" required>
                                                <option value="{{$member->blood_group}}" disabled selected>{{$member->blood_group}}</option>
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

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="emirates" class="form-label" >Select Emirate <span style="color: red">*</span></label>
                                                <select name="emirates" id="emirates" class="form-control" required>
                                                <option value="{{$member->emirates}}" disabled selected>{{$member->emirates}}</option>
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
                                                <label class="form-label">Profession <span style="color: red">*</span></label>
                                                <input type="text" name="profession" value="{{$member->profession}}" class="form-control"  placeholder="Type something" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Membership Number <span style="color: red">*</span></label>
                                                <input type="text" name="membership_number" value="{{$member->membership_number}}" class="form-control"  placeholder="Type something" required />
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Membership Issued <span style="color: red">*</span></label>
                                                <input type="text" name="issued" value="{{$member->issued}}" class="form-control"  placeholder="Type something" required />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Membership Expiry <span style="color: red">*</span></label>
                                                <input type="text" name="expiry" value="{{$member->expiry}}" class="form-control"  placeholder="Type something" required />
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Zone / Area    <span style="color: red">*</span></label>
                                                <input type="text" name="zone" value="{{$member->zone}}" class="form-control"  placeholder="Type something" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="membership_type" class="form-label" >Membership Type</label>
                                                <select name="membership_type" id="membership_type" class="form-control">
                                                    <option value="{{$member->membership_type}}" disabled selected>{{$member->membership_type}}</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="secondary">Secondary</option>
                                                </select>
                                            </div>
                                            </div>
                                        </div>

                                         <p class="text-edgray font-normal text-[16px] mb-[10px]">2. Address in home country</p>
                                        
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">House Name <span style="color: red">*</span></label>
                                                    <input type="text" name="house_name" value="{{$member->house_name}}" class="form-control"  placeholder="Type something" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">District <span style="color: red">*</span></label>
                                                <input type="text" name="district" value="{{$member->district}}" class="form-control"  placeholder="Type something" required />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Panjayath <span style="color: red">*</span></label>
                                                    <input type="text" name="panjayath" value="{{$member->panjayath}}" class="form-control"  placeholder="Type something" required />
                                                </div>
                                            </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">PIN <span style="color: red">*</span></label>
                                                        <input type="text"  name="pin" value="{{$member->pin}}" class="form-control"  placeholder="Type something" required />
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Mandalam <span style="color: red">*</span></label>
                                                    <input type="text" name="mandalam" value="{{$member->mandalam}}" class="form-control"  placeholder="Type something" required />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="before_pdp" class="form-label" >Before In PDP </label>
                                                    <select name="before_pdp" id="before_pdp" class="form-control">
                                                        <option value="{{$member->before_pdp}}" disabled selected>{{$member->before_pdp}}</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <div>
                                            @if ($user->type === 'admin')
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">Submit</button>
                                                <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
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
@endsection
