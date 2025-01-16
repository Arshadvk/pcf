@extends('new.base')
@section('title')
@endsection
@section('content')

<style>
    .team-section {
  padding-bottom: 60px;
}

@media (max-width: 991px) {
  .team-section {
    padding-bottom: 40px;
  }
}

@media (max-width: 767px) {
  .team-section {
    padding-bottom: 15px;
  }
}

.team-section .team-grids-4 {
  margin: 0 -15px;
}

@media (max-width: 767px) {
  .team-section .team-grids-4 {
    margin: 0 -7.5px;
  }
}

.team-section .team-grids-4 .grid {
  width: calc(25% - 30px);
  float: left;
  margin: 0 15px 50px;
  text-align: center;
}


@media (max-width: 991px) {
  .team-section .team-grids-4 .grid {
    width: calc(50% - 30px);
  }
}

@media (max-width: 767px) {
  .team-section .team-grids-4 .grid {
    width: calc(50% - 15px);
    margin: 0 7.5px 50px;
  }
}

@media (max-width: 500px) {
  .team-section .team-grids-4.grid {
    width: calc(100% - 15px);
    float: none;
  }
}

.team-section .team-grids-4 ul {
  list-style: none;
  display: inline-block;
}

.team-section .team-grids-4 ul li {
  float: left;
}

.team-section .team-grids-4 ul > li + li {
  margin-left: 10px;
}

.team-section .team-grids-4 ul li a {
  background-color: #203E94;
  width: 35px;
  height: 35px;
  line-height: 35px;
  display: block;
  font-size: 13px;
  font-size: 0.86667rem;
  color: #fff;
  border-radius: 3px;
}

.team-section .team-grids-4 ul li a:hover {
  background-color: #e04700;
}

.team-section .team-grids-4 .img-social {
  position: relative;
}

.team-section .team-grids-4 .social {
  width: 100%;
  position: absolute;
  bottom: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -ms-transition: all 0.5s;
  transition: all 0.5s;
}

.team-section .team-grids-4 .grid:hover .social {
  opacity: 1;
  visibility: visible;
  bottom: 20px;
}

.team-section .team-grids-4 .details {
  padding-top: 20px;
}

.team-section .team-grids-4 h3 {
  font-size: 18px;
  font-size: 1.2rem;
  font-weight: 500;
  margin: 0 0 0.1em;
}

@media (max-width: 767px) {
  .team-section .team-grids-4 h3 {
    font-size: 16px;
    font-size: 1.06667rem;
  }
}

.team-section .team-grids-4 h3 + span {
  font-size: 13px;
  font-size: 0.86667rem;
  color: #203E94;
  font-weight: 600;
}
.about-img {
    max-width: 65%!important;
    border-radius: 10px;
}
</style>



    <!-- start about-us-section -->
    {{-- <section class="about-us-section-s2 section-padding p-t-5">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="img-holder about-image">
                        <img src="assets/assets/img/logo.png" alt>
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="about-details">
                        <div class="section-title">
                            <span>About PCF</span>
                            <h2 >PEOPLE'S CULTURAL FORUM <span class="text-chilanka">പീപ്പിൾസ് കൾച്ചറൽ ഫോറം</span></h2>
                        </div>
                        <div class="details">
                            <p>അബ്ദുൾ നാസർ മഅ്ദനി അധ്യക്ഷനായ പീപ്പിൾസ് ഡെമോക്രാറ്റിക് പാർട്ടിയുടെ (പിഡിപി) പ്രവാസി സംഘടനയാണ്
                                പിസിഎഫ്, അബ്ദുൾ നാസർ മഅ്ദനി മുന്നോട്ടുവെച്ച 'മർദ്ദിതപക്ഷ രാഷ്ട്രീയ'ത്തിന്റെ ചുവട് പിടിച്ച്;
                                പ്രവാസി സമൂഹം നേരിടുന്ന വിവിധങ്ങളായ പ്രശ്നങ്ങൾ ഏറ്റെടുത്തു കൊണ്ടാണ് യുഎഇയിൽ ഉൾപ്പടെ
                                മറ്റെല്ലാ ജിസിസി നാടുകളിലും പി.സി.എഫ്. പ്രവർത്തിക്കുന്നത്.</p>
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
    </section> --}}
    <!-- end about-us-section -->


    <!-- start why-choose-us-section -->
    <section class="why-choose-us-section why-choose-faq-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-7">
                    <div class="inner-area">
                        <div class="section-title">
                            <span>Who we are</span>
                            <h2>PEOPLE'S CULTURAL FORUM <span class="text-chilanka">പീപ്പിൾസ് കൾച്ചറൽ ഫോറം</span></h2>
                        </div>
                        <div class="details">
                            <p >പി.വി.ഐ എന്ന സ്വതന്ത്രമായി പ്രവർത്തിക്കുകയായിരുന്ന സംഘടന രണ്ടായിരത്തിന് ശേഷം എല്ലാ ജിസിസി
                                നാടുകളിലും പി.സി.എഫ് എന്ന നാമധേയത്തിൽ ഏകീകൃത സ്വഭാവത്തിലേക്ക് മാറുകയും പിഡിപിയുടെ ഔദ്യോഗിക
                                പ്രവാസി സംഘടനയായി പിസിഎഫ് അംഗീകരിക്കപ്പെടുകയും ചെയ്തു. പ്രവാസികളായ പിഡിപി പ്രവർത്തകരുടെയും
                                ചെയർമാൻ അബ്ദുൾനാസർ മഅദനിയെ സ്നേഹിക്കുന്ന സേവന മനോഭാവമുള്ള നിരവധി അഭ്യുതകാംശികളുടെയും കൂട്ടായ
                                പരിശ്രമത്തിന്റെ ഫലമായി യു.എ.ഇ അടക്കമുള്ള ജിസിസി രാജ്യങ്ങളിലെ സജീവ സംഘടനകളിലൊന്നായി നിലവിൽ
                                പി.സി.എഫ് അഥവാ പീപ്പിൾസ് കൾച്ചറൽ ഫോറം പ്രവർത്തിച്ചുകൊണ്ടിരിക്കുന്നു</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-5">
                    <div class="img-holder about-image">
                        <img src="assets/assets/img/logo.png" alt>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why-choose-us-section -->


    <section class="about-us-section-s3 section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 class="text-chilanka">സംഘടനയുടെ&nbsp;ലക്ഷ്യങ്ങൾ</h2>
                </div>

                <div class="col col-md-6">
                    <div class="about-area">
                        <div class="details">
                            <div>
                                <h4><i class="ti-arrow-circle-right"></i></h4>
                                <p>മാതൃ രാജ്യത്തിൻ്റെ സർവ്വതോന്മുഖമായ പുരോഗതിക്ക് വേണ്ടി പ്രവർത്തിക്കുവാൻ തയ്യാറുള്ള ദലിത്
                                    പിന്നാക്ക ന്യൂനപക്ഷ മർദ്ദിത ജനവിഭാഗങ്ങൾക്ക് കഴിയുന്ന വിധം സഹായങ്ങൾ നൽകുക.</p>
                            </div>
                            <div>
                                <h4><i class="ti-arrow-circle-right"></i></h4>
                                <p>ഈ പ്രവർത്തനങ്ങളുടെ ലക്ഷ്യങ്ങൾ സാക്ഷാത്കരിക്കുന്നതിന് പ്രത്യയശാസ്ത്ര പ്രചാരണങ്ങളും മറ്റ്
                                    പ്രവർത്തനങ്ങളും നടത്തുകയും പ്രവാസികളെ പ്രസ്ഥാനത്തിലേക്ക് അടുപ്പിക്കുകയും ചെയ്യുക.</p>
                            </div>

                            <div>
                                <h4><i class="ti-arrow-circle-right"></i></h4>
                                <p>പ്രവാസി സമൂഹം നേരിടുന്ന വിവിധ പ്രശ്നങ്ങളിൽ ഇടപെടുകയും പ്രതികരിക്കുകയും ചെയ്യുക,
                                    ആവശ്യമെങ്കിൽ മാതൃ സംഘടനയുമായി സഹകരിച്ച് പ്രക്ഷോഭ പരിപാടികൾ സംഘടിപ്പിക്കുക.</p>
                            </div>

                            <div>
                                <h4><i class="ti-arrow-circle-right"></i></h4>
                                <p>അന്യായമായി തടവിലാക്കപ്പെടുകയോ വിചാരണ നേരിടുകയോ ചെയ്യുന്ന പ്രവാസി ഇന്ത്യക്കാരുടെ
                                    കുടുംബങ്ങളുടെ സംരക്ഷണത്തിനും കേസുകളുടെ നടത്തിപ്പിനും ആവശ്യമായ നിയമപരവും സാമ്പത്തികവുമായ
                                    സഹായം നൽകുക.</p>
                            </div>

                            <div>
                                <h4><i class="ti-arrow-circle-right"></i></h4>
                                <p>ദളിത് പിന്നോക്ക ന്യൂനപക്ഷങ്ങളുടെ സാമൂഹികവും സാംസ്കാരികവും രാഷ്ട്രീയവും വിദ്യാഭ്യാസപരവുമായ
                                    പുരോഗതി ലക്ഷ്യമാക്കി അബ്ദുന്നാസിർ മഅ്ദനിയുടെ നേതൃത്വത്തിൽ രൂപീകരിച്ച പീപ്പിൾസ്
                                    ഡെമോക്രാറ്റിക് പാർട്ടിയുടെ പ്രവർത്തനങ്ങൾക്ക് പിന്തുണ നൽകുക.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col col-md-6">
                    <div class="about-area">
                        <div class="details">
                            <div>
                                <h4><i class="ti-arrow-circle-right"></i></h4>
                                <p>മാതൃരാജ്യത്തെ ജനങ്ങളുടെ ക്ഷേമത്തിനായി പ്രവർത്തിക്കുന്നതിനൊപ്പം, ഓരോ പ്രവർത്തകനേയും അതത്
                                    രാജ്യങ്ങളിലെ നിയമങ്ങൾ പാലിക്കാൻ പ്രേരിപ്പിക്കുകയും, ആ രാജ്യത്തിനും ജനങ്ങൾക്കും
                                    വേണ്ടിയുള്ള സാമൂഹിക പ്രവർത്തനങ്ങളിൽ ഏർപ്പെടാൻ സജ്ജമാക്കുകയും ചെയ്യുക</p>

                            </div>
                            <div>
                                <h4><i class="ti-arrow-circle-right"></i></h4>
                                <p>അടിച്ചമർത്തപ്പെട്ട സമൂഹം നേരിടുന്ന വിവിധ വെല്ലുവിളികളെയും പ്രതിസന്ധികളെയും അടിസ്ഥാനമാക്കി
                                    അസംഘടിതരായ മുഴുവൻ പ്രവാസികളെയും ബോധവൽക്കരിക്കുക.</p>
                            </div>
                            <div>
                                <h4><i class="ti-arrow-circle-right"></i></h4>
                                <p>അംഗങ്ങളുടെ ക്ഷേമത്തിനും സുരക്ഷയ്ക്കുമായി നിക്ഷേപ പദ്ധതികൾ ഉൾപ്പെടെയുള്ള സാമൂഹിക സുരക്ഷാ
                                    പദ്ധതികൾ ആവിഷ്കരിക്കുക.</p>
                            </div>
                            <div>
                                <h4><i class="ti-arrow-circle-right"></i></h4>
                                <p>വിദേശത്ത് അപകടങ്ങളിലും മറ്റും മരണപ്പെടുന്ന പ്രവാസികളുടെ മൃതദേഹം നാട്ടിലെത്തിക്കാനും മറ്റ്
                                    നിയമ കുരുക്കുകളിൽ കഴിയുന്ന നിസ്സഹായരായ പ്രവാസികൾക്ക് നിയമസഹായം നൽകാനുമുള്ള പ്രവർത്തനങ്ങൾ
                                    നടത്തുക.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>

    <section class="team-section section-padding p-t-0" style="background-color: whitesmoke;">
        <div class="container">
            <div>
                <div>
                    <div class="section-title-s4">
                        <h2 class="text-chilanka text-center" style="padding-top: 30px;">പി.സി.എഫ്&nbsp;യു.എ.ഇ&nbsp;നാഷണൽ&nbsp;കമ്മിറ്റി                         </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="team-grids">
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="/assets/img/pcf/1.jpeg" alt>
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
                                    <img class="about-img" src="assets/assets/img/pcf/3.jpg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>KPA Rafeek</h3>
                                <span>Secretary</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="assets/assets/img/pcf/2.jpg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Ismail Arikkadi</h3>
                                <span>Treasurer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="section-title-s4">
                        <h2 class="text-chilanka" style="padding-top: 20px;">വൈസ്&nbsp;പ്രസിഡന്റുമാർ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="team-grids-4">
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="assets/img/pcf/4.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>മുഹമ്മദ് സാഹിബ്</h3>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="assets/img/pcf/8.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>ഷാരിസ് കള്ളിയത്ത്:</h3>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="assets/img/pcf/5.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>റാഷിദ് സുൽത്താൻ</h3>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="assets/img/pcf/15.jpg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>മുനീർ നന്നബ്ര</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="section-title-s4">
                        <h2 class="text-chilanka" style="padding-top: 20px;">ജോയിൻ&nbsp;സെക്രട്ടറിമാർ</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="team-grids-4">
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="assets/img/pcf/6.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>ജംഷാദ് ഇല്ലിക്കൽ</h3>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="assets/img/pcf/7.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>ഇബ്രാഹിം പട്ടിശ്ശേര</h3>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="assets/img/pcf/10.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>റഹീസ് കാർത്തികപ്പള്ളി</h3>
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" src="assets/img/pcf/9.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>ഇസ്മയിൽ സി.പി നന്നബ</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="section-title-s4">
                        <h2 class="text-chilanka" style="padding-top: 20px;">ഗ്ലോബൽ&nbsp;അംഗങ്ങൾ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="team-grids">
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" style="border-radius:50%"  src="assets/img/pcf/11.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>ഇസ്മയിൽ നാട്ടിക</h3>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" style="border-radius:50%" src="assets/img/pcf/13.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>അസീസ് സേട്ട്</h3>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-social">
                                <div class="img-holder">
                                    <img class="about-img" style="border-radius:50%" src="assets/img/pcf/14.jpeg" alt>
                                </div>
                            </div>
                            <div class="details">
                                <h3>ഇല്യാസ് തലശ്ശേരി</h3>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>


@endsection
