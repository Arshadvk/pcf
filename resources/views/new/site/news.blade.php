@extends('new.base')
@section('title')

@endsection
@section('content')
<section class="page-title">
    <div class="container">
        {{-- <div class="row">
            <div class="col col-xs-12">
                <h2>News</h2>
                <ol class="breadcrumb">
                    <li><a href="">Home</a></li>
                    <li>News</li>
                </ol>
            </div>
        </div>  --}}
    </div> 
</section>  

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
                    @foreach ($news as $news)
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ $news->image }}" alt>
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