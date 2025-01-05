@extends('base')
@section('title')

@endsection
@section('content')

    <main>
        <!-- BANNER SECTION START -->
        <section>
            <div class="ed-banner-slider swiper relative">
                <div class="swiper-wrapper">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="pt-[390px] md:pt-[300px] xs:pt-[280px] pb-[205px] bg-[url('../assets/img/banner-bg-1.jpg')] bg-no-repeat bg-center bg-cover relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
                            <div class="mx-[10%] md:mx-[15px]">
                                <div class="text-white w-[48%] xl:w-[60%] md:w-[70%] sm:w-[80%] xs:w-full">
                                    <h6 class="font-medium uppercase tracking-[3px] mb-[16px]"><span class="text-edyellow">( P C F )</span>  PEOPLE'S CULTURAL FORUM</h6> 
                                    <h2 class="font-bold text-[50px] leading-[1.13] mb-[15px]  text-chilanka">ജന സേവനം <br>  ജീവിത ദൗത്യം</h2>
                                    <p class="leading-[1.75] mb-[41px]">അബ്ദുൾ നാസർ മഅ്ദനി അധ്യക്ഷനായ <br> പീപ്പിൾസ് ഡെമോക്രാറ്റിക് പാർട്ടിയുടെ <br> (പിഡിപി) പ്രവാസി സംഘടനയാണ് പിസിഎഫ്</p> 
                                    <div class="flex items-center gap-[20px]">
                                        <a href="/register" class="ed-btn">Apply now</a>
                                        <a href="/about" class="ed-btn !bg-transparent border border-white hover:!bg-white hover:text-edpurple">About us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="pt-[390px] md:pt-[300px] xs:pt-[280px] pb-[205px] bg-[url('../assets/img/banner-bg-2.jpg')] bg-no-repeat bg-center bg-cover relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
                            <div class="mx-[10%] md:mx-[15px]">
                                <div class="text-white w-[48%] xl:w-[60%] md:w-[70%] sm:w-[80%] xs:w-full">
                                    <h6 class="font-medium uppercase tracking-[3px] mb-[16px]"><span class="text-edyellow">( P C F )</span>  PEOPLE'S CULTURAL FORUM</h6> 
                                    <h2 class="font-bold text-[50px] leading-[1.13] mb-[15px] text-chilanka">അവർണ്ണന് അധികാരം <br />
                                    പീഡിതർക്ക് മോചനം</h2>
                                    <p class="leading-[1.75] mb-[41px]">പ്രവാസി സമൂഹം നേരിടുന്ന വിവിധങ്ങളായ പ്രശ്നങ്ങൾ <br> ഏറ്റെടുത്തു കൊണ്ടാണ് യുഎഇയിൽ ഉൾപ്പടെ മറ്റെല്ലാ ജിസിസി നാടുകളിലും <br> പി.സി.എഫ്. പ്രവർത്തിക്കുന്നത്.</p> 
                                    <div class="flex items-center gap-[20px]">
                                        <a href="/register" class="ed-btn">Apply now</a>
                                        <a href="/about" class="ed-btn !bg-transparent border border-white hover:!bg-white hover:text-edpurple">About us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="pt-[390px] md:pt-[300px] xs:pt-[280px] pb-[205px] bg-[url('../assets/img/banner-bg-3.jpg')] bg-no-repeat bg-center bg-cover relative z-[1] before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
                            <div class="mx-[10%] md:mx-[15px]">
                                <div class="text-white w-[48%] xl:w-[60%] md:w-[70%] sm:w-[80%] xs:w-full">
                                    <h6 class="font-medium uppercase tracking-[3px] mb-[16px]"><span class="text-edyellow">( P C F )</span>  PEOPLE'S CULTURAL FORUM</h6> 
                                    <h2 class="font-bold text-[50px] leading-[1.13] mb-[10px] text-chilanka"  >സാമൂഹ്യ നീതി  <br> സമഗ്ര വികസനം <br/> സമാധാന സമൂഹം </h2>
                                     <p class="leading-[1.75] mb-[41px]">അബ്ദുൾ നാസർ മഅ്ദനി അധ്യക്ഷനായ <br> പീപ്പിൾസ് ഡെമോക്രാറ്റിക് പാർട്ടിയുടെ <br> (പിഡിപി) പ്രവാസി സംഘടനയാണ് പിസിഎഫ്</p> 
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- nav -->
                <div class="ed-banner-slider-nav absolute z-[1] top-[50%] xs:top-[80%] right-[130px] md:right-[60px] sm:right-[40px] xs:hidden flex flex-col gap-[15px] *:w-[40px] *:h-[40px] *:rounded-full *:border *:border-white/20 *:text-white *:text-[18px]">
                    <button class="prev hover:bg-edyellow hover:border-edyellow hover:text-black"><i class="fa-solid fa-angle-up"></i></button>
                    <button class="next leading-[43px] hover:bg-edyellow hover:border-edyellow hover:text-black"><i class="fa-solid fa-angle-down"></i></button>
                </div>
            </div>
        </section>
        <!-- BANNER SECTION END -->




        <!-- TESTIMONIAL SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <div class="flex md:flex-col items-center gap-y-[40px]">
                    <!-- testimonial -->
                    <div class="max-w-[50%] md:max-w-full">
                        <!-- heading -->
                        <div class="pb-[40px] sm:pb-[20px] bg-[url('../assets/img/testimonial-heading-vector.svg')] bg-no-repeat bg-left-bottom bg-[length:1000px] mb-[40px]  md:bg-none md:mb-0">
                            <h2 class="ed-section-title !text-[30px]">സംഘടനയുടെ ലക്ഷ്യങ്ങൾ </h2>
                        </div>

                        <div class="flex xxs:flex-col gap-[15px] items-center relative pr-[35px]">
                            <div class="ed-testimonial-slider swiper max-w-full">
                                <div class="swiper-wrapper">
                                    <!-- single testimony -->
                                    <div class="swiper-slide">
                                        <div>
                                            <p class="text-edgray mb-[24px]">മാതൃ രാജ്യത്തിൻ്റെ സർവ്വതോന്മുഖമായ പുരോഗതിക്ക് വേണ്ടി പ്രവർത്തിക്കുവാൻ തയ്യാറുള്ള ദലിത് പിന്നാക്ക ന്യൂനപക്ഷ മർദ്ദിത ജനവിഭാഗങ്ങൾക്ക് കഴിയുന്ന വിധം സഹായങ്ങൾ നൽകുക.</p>
                                        </div>
                                    </div>

                                    <!-- single testimony -->
                                    <div class="swiper-slide">
                                        <div>
                                            <p class="text-edgray mb-[24px]">മാതൃരാജ്യത്തെ ജനങ്ങളുടെ ക്ഷേമത്തിനായി പ്രവർത്തിക്കുന്നതിനൊപ്പം, ഓരോ പ്രവർത്തകനേയും അതത് രാജ്യങ്ങളിലെ നിയമങ്ങൾ പാലിക്കാൻ പ്രേരിപ്പിക്കുകയും, ആ രാജ്യത്തിനും ജനങ്ങൾക്കും വേണ്ടിയുള്ള സാമൂഹിക പ്രവർത്തനങ്ങളിൽ ഏർപ്പെടാൻ സജ്ജമാക്കുകയും ചെയ്യുക.</p>
                                        </div>
                                    </div>

                                    <!-- single testimony -->
                                    <div class="swiper-slide">
                                        <div>
                                            <p class="text-edgray mb-[24px]">ഈ പ്രവർത്തനങ്ങളുടെ ലക്ഷ്യങ്ങൾ സാക്ഷാത്കരിക്കുന്നതിന് പ്രത്യയശാസ്ത്ര പ്രചാരണങ്ങളും മറ്റ് പ്രവർത്തനങ്ങളും നടത്തുകയും പ്രവാസികളെ പ്രസ്ഥാനത്തിലേക്ക് അടുപ്പിക്കുകയും ചെയ്യുക.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-[10px] items-center absolute z-[1] bottom-[10px] right-0 ed-testimonial-slider-controls">
                                    <button class="prev hover:text-edpurple"><i class="fa-solid fa-arrow-left-long"></i></button>
                                    <div class="ed-testimonial-slider-pagination font-semibold text-[14px] text-edblue"></div>
                                    <button class="next hover:text-edpurple"><i class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                            </div>

                            <!-- slider dots -->
                            <div class="flex items-start flex-col xxs:hidden shrink-0 space-y-[40px] relative z-[1] before:absolute before:top-[50%] before:-translate-y-[50%] before:right-[28px] before:w-[138px] before:h-[420px] before:bg-[url('../assets/img/testimonial-img-slider-vector.svg')] before:bg-no-repeat before:bg-center before:bg-[length:100%_100%] before:-z-[1] before:opacity-10 before:pointer-events-none">
                                <div class="rounded-full overflow-hidden inline-block border border-edpurple p-[5px] even:ml-[40px]">
                                    <img src="assets/img/events/1.jpg" alt="user" class="rounded-full w-[90px] aspect-square">
                                </div>
                                <div class="rounded-full overflow-hidden inline-block border border-edpurple p-[5px] even:ml-[40px]">
                                    <img src="assets/img/events/2.jpg" alt="user" class="rounded-full w-[90px] aspect-square">
                                </div>
                                <div class="rounded-full overflow-hidden inline-block border border-edpurple p-[5px] even:ml-[40px]">
                                    <img src="assets/img/events/4.jpg" alt="user" class="rounded-full w-[90px] aspect-square">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <img src="assets/img/5.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- TESTIMONIAL SECTION END -->


        <!-- TEACHER SECTION START -->
        <section class="bg-[#FAF9F6] py-[120px] xl:py-[80px] md:py-[60px] relative z-[1]">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <!-- heading -->
                <div class="flex flex-wrap xs:flex-col xs:text-center justify-between items-center gap-y-[15px] mb-[46px] md:mb-[30px]">
                    <div>
                        <h2 class="ed-section-title">Our P C F Leaders</h2>
                    </div>

                </div>

                <div class="grid grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">
                    <!-- single teacher -->
                    <div class="ed-teacher group">
                        <div class="ed-teacher__img rounded-[16px] overflow-hidden">
                            <img src="assets/img/pcf/1.jpg" alt="Team Member Image" class="w-full aspect-[370/375] duration-[400ms] group-hover:scale-110">
                        </div>

                        <div class="ed-teacher__txt bg-white relative z-[1] mx-[25px] lg:mx-[20px] md:mx-[15px] xs:mx-[5px] -mt-[44px] md:-mt-[15px] xs:mt-0 rounded-[16px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] px-[25px] xl:px-[20px] md:px-[15px] pb-[30px] lg:pb-[25px] md:pb-[20px] before:w-full before:absolute before:-z-[1] before:h-full before:bg-white before:left-0 before:rounded-[16px] before:-top-[33px] before:skew-y-[4deg]">
            
                            <h5 class="font-semibold text-[20px] text-etBlack mb-[4px]"><a href="" class="hover:text-etBlue">Abdulkadher Kothachira</a></h5>
                             <span class="text-etGray text-[16px]">President</span>
                        </div>
                    </div>

                    <!-- single teacher -->
                    <div class="ed-teacher group">
                        <div class="ed-teacher__img rounded-[16px] overflow-hidden">
                            <img src="assets/img/pcf/2.jpg" alt="Team Member Image" class="w-full aspect-[370/375] duration-[400ms] group-hover:scale-110">
                        </div>

                        <div class="ed-teacher__txt bg-white relative z-[1] mx-[25px] lg:mx-[20px] md:mx-[15px] xs:mx-[5px] -mt-[44px] md:-mt-[15px] xs:mt-0 rounded-[16px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] px-[25px] xl:px-[20px] md:px-[15px] pb-[30px] lg:pb-[25px] md:pb-[20px] before:w-full before:absolute before:-z-[1] before:h-full before:bg-white before:left-0 before:rounded-[16px] before:-top-[33px] before:skew-y-[4deg]">
                        
                            <h5 class="font-semibold text-[20px] text-etBlack mb-[4px]"><a href="" class="hover:text-etBlue">KPA Rafeek</a></h5>
                            <span class="text-etGray text-[16px]">Secretary</span>

                        </div>
                    </div>

                    <!-- single teacher -->
                    <div class="ed-teacher group">
                        <div class="ed-teacher__img rounded-[16px] overflow-hidden">
                            <img src="assets/img/pcf/3.jpg" alt="Team Member Image" class="w-full aspect-[370/375] duration-[400ms] group-hover:scale-110">
                        </div>

                        <div class="ed-teacher__txt bg-white relative z-[1] mx-[25px] lg:mx-[20px] md:mx-[15px] xs:mx-[5px] -mt-[44px] md:-mt-[15px] xs:mt-0 rounded-[16px] shadow-[0_4px_60px_rgba(18,96,254,0.12)] px-[25px] xl:px-[20px] md:px-[15px] pb-[30px] lg:pb-[25px] md:pb-[20px] before:w-full before:absolute before:-z-[1] before:h-full before:bg-white before:left-0 before:rounded-[16px] before:-top-[33px] before:skew-y-[4deg]">
                          
                            <h5 class="font-semibold text-[20px] text-etBlack mb-[4px]"><a href="" class="hover:text-etBlue">Ismail Arikkadi</a></h5>
                            <span class="text-etGray text-[16px]">Treasurer</span>

                        </div>
                    </div>
                </div>
            </div>

            <!-- vector -->
            <div>
                <img src="assets/img/teacher-vector-1.svg" alt="vecotr" class="pointer-events-none absolute -z-[1] bottom-0 left-0">
                <img src="assets/img/teacher-vector-2.svg" alt="vecotr" class="pointer-events-none absolute -z-[1] top-[105px] right-0">
            </div>
        </section>
        <!-- TEACHER SECTION END -->


        <!-- BLOG SECTION START -->
        <section class="py-[120px] xl:py-[80px] md:py-[60px] relative z-[1] overflow-hidden">
            <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
                <!-- heading -->
                <div class="text-center mb-[46px] md:mb-[30px]">
                    <h6 class="ed-section-sub-title">Latest Blog</h6>
                    <h2 class="ed-section-title">Our Latest News</h2>
                </div>

                <!-- blog cards -->
                <div class="grid grid-cols-3 md:grid-cols-2 xs:grid-cols-1 xs:max-w-[65%] xxs:max-w-full xs:mx-auto gap-[30px] lg:gap-[20px] sm:gap-[15px]">
                    <!-- single blog -->
                    <div class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                        <div class="ed-blog__img relative z-[1] mb-[45px]">
                            <div class="overflow-hidden rounded-[6px]">
                                <img src="assets/img/news/news-1.jpg" alt="blog image" class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                            </div>
                        </div>
                    </div>

                    <!-- single blog -->
                    <div class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                        <div class="ed-blog__img relative z-[1] mb-[45px]">
                            <div class="overflow-hidden rounded-[6px]">
                                <img src="assets/img/news/news-2.jpg" alt="blog image" class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                            </div>
                        </div>
                    </div>

                    <!-- single blog -->
                    <div class="et-blog bg-white border border-[#E5E5E5] rounded-[8px] p-[24px] lg:p-[20px] sm:p-[18px] relative group">
                        <div class="ed-blog__img relative z-[1] mb-[45px]">
                            <div class="overflow-hidden rounded-[6px]">
                                <img src="assets/img/news/news-5.jpg" alt="blog image" class="w-full aspect-[37/24] object-cover transition duration-[400ms] group-hover:scale-105">
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <img src="assets/img/form-notice-vector-1.svg" alt="vector" class="absolute -z-[1] bottom-[288px] left-0 pointer-events-none">
                </div>
            </div>
        </section>
        <!-- BLOG SECTION END -->
    </main>

  

 @endsection
