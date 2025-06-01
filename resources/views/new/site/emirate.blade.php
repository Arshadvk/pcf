@extends('new.base')
@section('title')
@endsection
@section('content')
    <section class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <div class="section-title">
                        <span style="font-size: 40px;">{{ $emirate->name }}</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="blog-grids">
                        @foreach ($committee as $committe)
                            <div class="grid">
                                <div class="entry-media text-center">
                                    <img src="/assets/assets/img/emirates/{{ $committe->id }}.jpg" alt>
                                    <h4 style="font-size: 30px;">{{ $committe->name }}</h4>
                                    <h3>{{ $committe->position }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div> 
    </section>
@endsection
