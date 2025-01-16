@extends('new.base')
@section('title')

@endsection
@section('content')
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
                    <div class="service-grids clearfix">

                        @foreach ($gallery as $gallery)
                        <div class="grid">
                            <div class="img-holder">
                                <img  src="{{ $gallery->image }}" alt>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end services-section-s2 -->

@endsection