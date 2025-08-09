@extends('new.base')
@section('title')

@endsection
@section('content')


<style>
.services-section-s2 .service-grids {
    display: grid !important;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px !important;
    margin: 0 !important;
}

.services-section-s2 .service-grids .grid {
    float: none !important;
    width: 100% !important;
    margin: 0 !important;
    max-width: 100%;
    border-radius: 6px;
    overflow: hidden;
}

.img-holder {
    width: 100%;
    height: 12rem;
    overflow: hidden;
}

.img-holder img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease;
}

.img-holder:hover img {
    transform: scale(1.05);
}

.text-center {
    text-align: center;
    margin-top: 10px;
    font-size: 14px;
    color: #333;
}
</style>

    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            {{-- <div class="row">
                <div class="col col-xs-12">
                    <h2>Gallery</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Gallery</li>
                    </ol>
                </div>
            </div> <!-- end row --> --}}
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start services-section-s2 -->
    <section class="services-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grids">

                        @foreach ($gallery as $gallery)
                        <div class="grid">
                            <div class="img-holder">
                                <img  src="{{ $gallery->image }}" alt>
                            </div>
                            <p class="text-center">{{ $gallery->title }}</p>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end services-section-s2 -->

@endsection