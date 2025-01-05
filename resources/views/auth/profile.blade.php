@extends('dashboard.base')
@section('title')
    Profile | P C F - People Culture Forum
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Change Password</h4>
                                <form class="custom-validation" method="post" action="{{ route('postPassword') }}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label class="form-label">Old Password</label>
                                        <input name="old_password" id="pass1" type="text" class="form-control"
                                            required placeholder="Enter Your Old  Password" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">New Password</label>
                                        <div>
                                            <input type="password" name="new_password" id="pass2" class="form-control"
                                                required placeholder="Password" />
                                            <small id="password" style="color: red; display: none;">Old And New Passwords
                                                Are Same!</small>
                                        </div>
                                        <div class="mt-2">
                                            <input type="password" id="pass3" class="form-control" required
                                                placeholder="Re-Type Password" />
                                            <small id="passwordError" style="color: red; display: none;">Passwords do not
                                                match!</small>
                                        </div>
                                    </div>

                                    <div>
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
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
                    </div> <!-- end col -->


                </div>

            </div>
        </div> <!-- end col -->


        <script>
            document.getElementById('pass2').addEventListener('input', function() {
                const pass1 = document.getElementById('pass1').value;
                const pass2 = this.value;
                const error = document.getElementById('password');

                if (pass1 == pass2) {
                    error.style.display = 'block'; // Show error
                    this.setCustomValidity('Old And New Passwords Are Same'); // Prevent form submission
                } else {
                    error.style.display = 'none'; // Hide error
                    this.setCustomValidity(''); // Allow form submission
                }
            });

            document.getElementById('pass3').addEventListener('input', function() {
                const pass2 = document.getElementById('pass2').value;
                const pass3 = this.value;
                const error = document.getElementById('passwordError');

                if (pass2 !== pass3) {
                    error.style.display = 'block'; // Show error
                    this.setCustomValidity('Passwords do not match'); // Prevent form submission
                } else {
                    error.style.display = 'none'; // Hide error
                    this.setCustomValidity(''); // Allow form submission
                }
            });
        </script>


    </div>
@endsection
