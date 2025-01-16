@extends('new.base')
@section('title')

@endsection
@section('content')
       <!-- start page-title -->
       <section class="page-title">
        <div class="container">
            <div class="row">
                {{-- <div class="col col-xs-12">
                    <h2>Contact us</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Contact us</li>
                    </ol>
                </div> --}}
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start contact-pg-section -->
    <section class="contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-5 col-md-6 col-sm-8">
                    <div class="section-title">
                        
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-7">
                    <form method="post" class="contact-validation-active" id="contact-form-main">
                        <div>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                        </div>
                        <div class="fullwidth">
                            <textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
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

                <div style="padding-top: 80px" class="col col-md-5">
                    <div class="office-info">
                        <div>
                            <h3>PEOPLE'S CULTURAL FORUM</h3>
                            <ul>
                                <li><i class="ti-location-pin"></i> Khalidiyah - Abu Dhabi</li>
                                <li><i class="ti-mobile"></i> +91 9061116222</li>
                                <li><i class="ti-email"></i> info@pcfgcc.com</li>
                            </ul>
                        </div>

                    </div>
                </div>                  
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-pg-section -->


@endsection