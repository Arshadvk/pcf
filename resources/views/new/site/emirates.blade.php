@extends('new.base')
@section('title')
@endsection
@section('content')

<section class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-4">
                <div class="section-title">
                    <span style="font-size: 30px;">emirates</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="blog-grids">
                    @foreach ($emirates as $emirate)
                    <div class="grid">
                        <div class="entry-media text-center">
                            <a href="{{ route('emirate',  $emirate->id ) }}" >
                                <img src="/assets/assets/img/emirates/{{ $emirate->id }}.jpg" alt>
                              <h4  style="font-size: 30px;">{{ $emirate->name }}</h4>  
                            </a>
                        </div>
                        {{-- <div class="details">
                            <h3><a href="#">Garment sector set to take an environmental turn arround the
                                    world</a></h3>
                            <p>small, lay peacefully between its four familiar walls. A collection of textile
                                samples lay spread</p>
                        </div>  --}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
@endsection
