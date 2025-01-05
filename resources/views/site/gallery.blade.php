@extends('base')
@section('title')

@endsection
@section('content')

<main>
    <!-- BREADCRUMB SECTION START -->
    <section class="pt-[327px] xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] pb-[158px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] text-center bg-[url('../assets/img/breadcrumb-bg.jpg')] bg-no-repeat bg-cover bg-center relative z-[1] overflow-hidden before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">Gallery</h1>
            <ul class="flex items-center justify-center gap-[10px] text-white">
                <li><a href="/" class="text-edyellow">Home</a></li>
                <li><span class="text-[12px]"><i class="fa-solid fa-angle-double-right"></i></span></li>
                <li>Gallery</li>
            </ul>
        </div>

        <div class="vectors">
            <img src="assets/img/breadcrumb-vector-1.svg" alt="vector" class="absolute -z-[1] pointer-events-none bottom-[34px] left-0 xl:left-auto xl:right-[90%]">
            <img src="assets/img/breadcrumb-vector-2.svg" alt="vector" class="absolute -z-[1] pointer-events-none bottom-0 right-0 xl:right-auto xl:left-[60%]">
        </div>
    </section>
    <!-- BREADCRUMB SECTION END -->


    <!-- GALLERY SECTION START -->
    <div class="py-[130px] xl:py-[80px] md:py-[60px]">
        <div class="container mx-auto max-w-[calc(100%-37.1vw)] xxxl:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-170px)] px-[12px] lg:max-w-full">
            <div class="grid grid-cols-3 sm:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">
                <div class="space-y-[30px] lg:space-y-[20px]">
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/1.jpg" alt="gallery image" class="w-full aspect-[1] object-cover">
                        <a href="assets/img/events/1.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/2.jpg" alt="gallery image" class="w-full aspect-[1] object-cover">
                        <a href="assets/img/events/2.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                </div>

                {{-- <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                    <img src="assets/img/gallery-img-big.jpg" alt="gallery Image" class="w-full h-full object-cover">
                    <a href="assets/img/gallery-img-big.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                        <i class="fa-plus fa-regular"></i>
                    </a>
                </div> --}}

                <div class="space-y-[30px] lg:space-y-[20px]">
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/4.jpg" alt="gallery image" class="w-full aspect-[1] object-cover">
                        <a href="assets/img/events/4.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/5.jpg" alt="gallery image" class="w-full aspect-[1] object-cover">
                        <a href="assets/img/events/5.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>

                </div>

                <div class="space-y-[30px] lg:space-y-[20px]">
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/7.jpg" alt="gallery image" class="w-full aspect-[1] object-cover">
                        <a href="assets/img/events/7.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/8.jpg" alt="gallery image" class="w-full aspect-[1]  object-cover">
                        <a href="assets/img/events/8.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                </div>


                <div class="space-y-[30px] lg:space-y-[20px]">
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/11.jpg" alt="gallery image" class="w-full aspect-[1] object-cover">
                        <a href="assets/img/events/11.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/10.jpg" alt="gallery image" class="w-full aspect-[1]  object-cover">
                        <a href="assets/img/events/10.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                </div>


                <div class="space-y-[30px] lg:space-y-[20px]">
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/12.jpg" alt="gallery image" class="w-full aspect-[1] object-cover">
                        <a href="assets/img/events/12.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/13.jpg" alt="gallery image" class="w-full aspect-[1]  object-cover">
                        <a href="assets/img/events/13.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                </div>


                <div class="space-y-[30px] lg:space-y-[20px]">
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/14.jpg" alt="gallery image" class="w-full aspect-[1] object-cover">
                        <a href="assets/img/events/14.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                    <div class="relative z-[1] group before:absolute before:inset-0 before:bg-etBlack/70 before:z-[0] before:opacity-0 before:transition before:duration-[400ms] hover:before:opacity-100">
                        <img src="assets/img/events/17.jpg" alt="gallery image" class="w-full aspect-[1]  object-cover">
                        <a href="assets/img/events/17.jpg" data-fslightbox="gallery" class="inline-flex items-center justify-center w-[64px] aspect-square rounded-full bg-white text-[25px] absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-0 group-hover:opacity-100 hover:text-etBlue">
                            <i class="fa-plus fa-regular"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GALLERY SECTION END -->
</main>

@endsection
