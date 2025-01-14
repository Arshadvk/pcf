@extends('new.base')
@section('title')

@endsection
@section('content')

<style>
    .class-hide{
        display: flex !important; 

    }
    .main-head {

    }
    @media (max-width: 768px) {
      .class-hide{
        display: none !important;        /* Hide by default */
        
    }
    .main-head {
        padding-top: 350px!important; 
        font-size: 30px!important; 
        /* color: #000!important;  */
        font-weight: bolder !important; 
    }
    }
</style>
    <!-- start of hero -->
    <section class="hero-slider hero-style-2">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image flex justify-end items-center relative"
                        style="background-image: url('assets/assets/images/slider/hero1.jpg'); background-size: cover;  background-position: center right;">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 class="main-head text-chilanka">ജന സേവനം <br> ജീവിത ദൗത്യം</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p class="class-hide text-chilanka" style="color: black;">അബ്ദുൾ നാസർ മഅ്ദനി അധ്യക്ഷനായ
                                    പീപ്പിൾസ് ഡെമോക്രാറ്റിക് പാർട്ടിയുടെ (പിഡിപി) പ്രവാസി സംഘടനയാണ് പിസിഎഫ്</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image flex justify-end items-center relative" style="background-image: url('assets/assets/images/slider/hero2.jpg'); background-size: cover;  background-position: center right;">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 class="main-head text-chilanka"  >അവർണ്ണന്&nbsp;അധികാരം <br /> പീഡിതർക്ക്&nbsp;മോചനം</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p class="class-hide text-chilanka"  style="color: black;">പ്രവാസി സമൂഹം നേരിടുന്ന വിവിധങ്ങളായ പ്രശ്നങ്ങൾ ഏറ്റെടുത്തു കൊണ്ടാണ് യുഎഇയിൽ ഉൾപ്പടെ മറ്റെല്ലാ ജിസിസി നാടുകളിലും  പി.സി.എഫ്. പ്രവർത്തിക്കുന്നത്.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </div>

            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image flex justify-end items-center relative"
                    style="background-image: url('assets/assets/images/slider/hero3.jpg'); background-size: cover;  background-position: center right;">
                    <div class="container">
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2 class="text-chilanka">സാമൂഹ്യ&nbsp;നീതി <br> സമഗ്ര&nbsp;വികസനം <br />
                                സമാധാന&nbsp;സമൂഹം</h2>
                        </div>

                        <div class="clearfix"></div>
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

 
@endsection
