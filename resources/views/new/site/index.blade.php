@extends('new.base')
@section('title')

@endsection
@section('content')


    <!-- start of hero -->
    <section class="hero-slider hero-style-2">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image flex justify-end items-center relative"
                        style="background-image: url('assets/assets/images/slider/hero1.jpg'); background-size: cover;  background-position: center right;">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 class="text-chilanka">ജന സേവനം <br> ജീവിത ദൗത്യം</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p class="text-chilanka" style="color: black;">അബ്ദുൾ നാസർ മഅ്ദനി അധ്യക്ഷനായ
                                    പീപ്പിൾസ് ഡെമോക്രാറ്റിക് പാർട്ടിയുടെ (പിഡിപി) പ്രവാസി സംഘടനയാണ് പിസിഎഫ്</p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn">Our industry</a>
                                <a href="#" class="theme-btn-s2">Contact us</a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->

                <!-- <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image flex justify-end items-center relative" style="background-image: url('assets/assets/images/slider/hero2.jpg'); background-size: cover;  background-position: center right;">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 class="text-chilanka"  >അവർണ്ണന്&nbsp;അധികാരം <br /> പീഡിതർക്ക്&nbsp;മോചനം</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p class="text-chilanka"  style="color: black;">പ്രവാസി സമൂഹം നേരിടുന്ന വിവിധങ്ങളായ പ്രശ്നങ്ങൾ ഏറ്റെടുത്തു കൊണ്ടാണ് യുഎഇയിൽ ഉൾപ്പടെ മറ്റെല്ലാ ജിസിസി നാടുകളിലും  പി.സി.എഫ്. പ്രവർത്തിക്കുന്നത്.</p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn">Our industry</a>
                                <a href="#" class="theme-btn-s2">Contact us</a>
                            </div>
                        </div>
                    </div>
                     <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->

            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image flex justify-end items-center relative"
                    style="background-image: url('assets/assets/images/slider/hero3.jpg'); background-size: cover;  background-position: center right;">
                    <div class="container">
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2 class="text-chilanka">സാമൂഹ്യ&nbsp;നീതി <br> സമഗ്ര&nbsp;വികസനം <br />
                                സമാധാന&nbsp;സമൂഹം</h2>
                        </div>

                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="#" class="theme-btn">Our industry</a>
                            <a href="#" class="theme-btn-s2">Contact us</a>
                        </div>
                    </div>
                </div> <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
        </div>
        <!-- end swiper-wrapper -->

        <!-- swipper controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
    <!-- end of hero slider -->




    <!-- start about-us-section-s2 -->
    <section class="about-us-section-s2 section-padding p-t-5">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="img-holder about-image">
                        <img src="assets/assets/img/home/leader.jpeg" alt>
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="about-details">
                        <div class="section-title">
                            <span>About PCF</span>
                            <h2>PEOPLE'S CULTURAL FORUM <span>പീപ്പിൾസ് കൾച്ചറൽ ഫോറം</span></h2>
                        </div>
                        <div class="details">
                            <p>അബ്ദുൾ നാസർ മഅ്ദനി അധ്യക്ഷനായ പീപ്പിൾസ് ഡെമോക്രാറ്റിക് പാർട്ടിയുടെ (പിഡിപി) പ്രവാസി
                                സംഘടനയാണ് പിസിഎഫ്, അബ്ദുൾ നാസർ മഅ്ദനി മുന്നോട്ടുവെച്ച 'മർദ്ദിതപക്ഷ
                                രാഷ്ട്രീയ'ത്തിന്റെ
                                ചുവട് പിടിച്ച്; പ്രവാസി സമൂഹം നേരിടുന്ന വിവിധങ്ങളായ പ്രശ്നങ്ങൾ ഏറ്റെടുത്തു കൊണ്ടാണ്
                                യുഎഇയിൽ ഉൾപ്പടെ മറ്റെല്ലാ ജിസിസി നാടുകളിലും പി.സി.എഫ്. പ്രവർത്തിക്കുന്നത്.</p>
                            <ul>
                                <li><i class="ti-arrow-circle-right"></i> സാമൂഹ്യ&nbsp;നീതി </li>
                                <li><i class="ti-arrow-circle-right"></i> സമഗ്ര&nbsp;വികസനം</li>
                                <li><i class="ti-arrow-circle-right"></i> സമാധാന&nbsp;സമൂഹം </li>
                            </ul>
                        </div>
                        <!-- <div class="ceo-quote">
                            <blockquote>
                                ജന സേവനം <br> ജീവിത ദൗത്യം
                                <span>- അബ്ദുൾ നാസർ മഅ്ദനി</span>
                            </blockquote>
                        </div> -->
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end about-us-section-s2 -->

    <!-- start latest-projects-section-s2 -->
    <section class="latest-projects-section-s2 ">
        <div class="content-area">
            <div class="team-grids projects-slider">
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/assets/img/events/1.jpg" alt>
                        </div>
                        <!-- <div class="details">
                            <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                            <div class="info">
                                <h3><a href="#">Asian Industrial Project</a></h3>
                                <p class="cat">Industry, Corporate</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/assets/img/events/2.jpg" alt>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/assets/img/events/4.jpg" alt>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/assets/img/events/5.jpg" alt>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="inner">
                        <div class="img-holder">
                            <img src="assets/assets/img/events/7.jpg" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end latest-projects-section-s2 -->



    <!-- start team-section -->
    <section class="team-section section-padding p-t-0" style="background-color: whitesmoke;">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="section-title-s4">
                        <h2 style="padding-top: 20px;">Our P C F Leaders</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="team-grids">
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/assets/img/pcf/1.jpg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Abdulkadher Kothachira</h3>
                                <span>President</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/assets/img/pcf/2.jpg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Ismail Arikkadi</h3>
                                <span>Treasurer</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img src="assets/assets/img/pcf/3.jpg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>KPA Rafeek</h3>
                                <span>Secretary</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end team-section -->

    <!-- start blog-section -->
    <section class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <div class="section-title">
                        <span style="font-size: 30px;">Recent news</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="blog-grids">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="assets/assets/img/news/news-1.jpg" alt>
                            </div>
                            <!-- <div class="details">
                                <h3><a href="#">Garment sector set to take an environmental turn arround the
                                        world</a></h3>
                                <p>small, lay peacefully between its four familiar walls. A collection of textile
                                    samples lay spread</p>
                            </div> -->
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="assets/assets/img/news/news-2.jpg" alt>
                            </div>

                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="assets/assets/img/news/news-5.jpg" alt>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-section -->

    <!-- start contact-section -->
    <section class="contact-section section-padding" style="background-color: whitesmoke;">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <div class="left-col">
                        <div class="img-holder">
                            <img src="assets/assets/img/home/leader.jpeg" alt>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="contact-form">
                        <div class="section-title">
                            <h2>Contact us</h2>
                        </div>
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Phone*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Subject*">
                            </div>
                            <div class="fullwidth">
                                <textarea class="form-control" name="note" id="note"
                                    placeholder="Case Description..."></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="submit-btn">Submit Now</button>
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
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-section -->
@endsection
