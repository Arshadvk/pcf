@extends('old.base')
@section('title')

@endsection
@section('content')
<main>
    <!-- BREADCRUMB SECTION START -->
    <section class="pt-[327px] xl:pt-[287px] lg:pt-[237px] sm:pt-[200px] xxs:pt-[180px] pb-[158px] xl:pb-[118px] lg:pb-[98px] sm:pb-[68px] xs:pb-[48px] text-center bg-[url('../assets/img/breadcrumb-bg.jpg')] bg-no-repeat bg-cover bg-center relative z-[1] overflow-hidden before:absolute before:-z-[1] before:inset-0 before:bg-edblue/70 before:pointer-events-none">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <h1 class="font-semibold text-[clamp(35px,6vw,56px)] text-white">News</h1>
            <ul class="flex items-center justify-center gap-[10px] text-white">
                <li><a href="/" class="text-edyellow">Home</a></li>
                <li><span class="text-[12px]"><i class="fa-solid fa-angle-double-right"></i></span></li>
                <li>News</li>
            </ul>
        </div>

        <div class="vectors">
            <img src="assets/img/breadcrumb-vector-1.svg" alt="vector" class="absolute -z-[1] pointer-events-none bottom-[34px] left-0 xl:left-auto xl:right-[90%]">
            <img src="assets/img/breadcrumb-vector-2.svg" alt="vector" class="absolute -z-[1] pointer-events-none bottom-0 right-0 xl:right-auto xl:left-[60%]">
        </div>
    </section>
    <!-- BREADCRUMB SECTION END -->


    <!-- Events SECTION START -->
    <div class="py-[120px] xl:py-[80px] md:py-[60px]">
        <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
            <div class="grid grid-cols-3 md:grid-cols-2 xxs:grid-cols-1 gap-[30px] lg:gap-[20px]">
                <!-- single event card -->
                <div class="bg-white p-[30px] lg:p-[20px] rounded-[10px] shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                    <div class="rounded-[10px] overflow-hidden mb-[20px]">
                        <img src="assets/img/news/news-1.jpg" alt="Event image" class="aspect-[310/198] w-full">
                    </div>
                </div>

                <!-- single event card -->
                <div class="bg-white p-[30px] lg:p-[20px] rounded-[10px] shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                    <div class="rounded-[10px] overflow-hidden mb-[20px]">
                        <img src="assets/img/news/news-2.jpg" alt="Event image" class="aspect-[310/198] w-full">
                    </div>

                </div>

                <!-- single event card -->
                <div class="bg-white p-[30px] lg:p-[20px] rounded-[10px] shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                    <div class="rounded-[10px] overflow-hidden mb-[20px]">
                        <img src="assets/img/news/news-4.jpg" alt="Event image" class="aspect-[310/198] w-full">
                    </div>
                </div>

                <div class="bg-white p-[30px] lg:p-[20px] rounded-[10px] shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                    <div class="rounded-[10px] overflow-hidden mb-[20px]">
                        <img src="assets/img/news/news-5.jpg" alt="Event image" class="aspect-[310/198] w-full">
                    </div>

                    {{-- <div>
                        <h5 class="mb-[15px]"><a href="" class="font-semibold text-[22px] lg:text-[20px] leading-[1.26] hover:text-edpurple">Learning Python for Data Analysis and Visualization</a></h5>
                        <p class="text-edgray2 mb-[16px]">There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
                    </div> --}}
                </div>

                <div class="bg-white p-[30px] lg:p-[20px] rounded-[10px] shadow-[0_4px_30px_rgba(0,0,0,0.08)]">
                    <div class="rounded-[10px] overflow-hidden mb-[20px]">
                        <img src="assets/img/news/news-3.jpg" alt="Event image" class="aspect-[142/153] w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events SECTION END -->
</main>

@endsection
