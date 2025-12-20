@extends('new.base')
@section('title')
@endsection
@section('content')
    <section class="blog-section section-padding">
        <div class="container">


            <h1 style="text-center text-chilanka" style="padding-bottom: 40px"></h1>
            <!-- start team-section -->
            <section class="team-section">
                <div class="container">

                    <div class="section-title-s4">
                        <h2 class="text-heading text-chilanka" style="padding-top: 20px;color:#203E94">
                            {{ $emirate->name_mal }} എമിറേറ്റ്സ് കമ്മിറ്റി {{ $activeCommittee->name ?? '2024-2025' }}</h2>
                    </div>


                    <div class="row">



                        <div class="col col-xs-12">
                            <div class="team-grids">
                                @foreach ($section_one as $committe)
                                    <div class="grid">
                                        <div class="img-social">
                                            <div class="img-holder">
                                                <img src={{$committe->image ??  "/assets/img/user_tummy.png"}} style ="max-width: 60%" alt="{{ $committe->name }}">
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h3 class="text-chilanka">{{ $committe->name }}</h3>
                                            <span class="text-chilanka">{{ $committe->position1->name ?? '-' }}</span>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
            <!-- end team-section -->


            <div class="container">
                <div class="row">
                    <!-- Vice Chairmen -->
                     @if(isset($section_two) && $section_two->isNotEmpty())
                        <div class="col-md-6">
                            <div class="section-title-s4">                            
                                <h2 class="text-heading text-chilanka" style="padding-top: 20px; font-size:2.06rem">
                                വൈസ്&nbsp;പ്രസിഡന്റുമാർ</h2>                           
                            </div>
                            <div class="section-title-s4">
                                <ul>
                                    @foreach ($section_two as $item)
                                        <h3 class="text-chilanka" style="color: rgb(72, 72, 72)">{{ $item->name }}</h3>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <!-- Joint Secretaries -->
                     @if(isset($section_three) && $section_three->isNotEmpty())
                        <div class="col-md-6">
                            <div class="section-title-s4">
                                <h2 class="text-heading text-chilanka" style="padding-top: 20px; font-size:2.06rem">
                                    ജോ:&nbsp;സെക്രട്ടറിമാർ</h2>
                            </div>
                            <div class="section-title-s4">
                                <ul>
                                    @foreach ($section_three as $item)
                                        <h3 class="text-chilanka" style="color: rgb(72, 72, 72)">{{ $item->name }}</h3>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>


        </div>
    </section>
    @if(isset($gallery) && $gallery->isNotEmpty())
    <section class="latest-projects-section-s2 ">
        <div class="content-area">
            <div class="team-grids projects-slider">
                @foreach ($gallery as $item)
                    <div class="grid">
                        <div class="inner">
                            <div class="img-holder">
                                <img src="/assets/assets/img/events/1.jpg" alt>
                            </div>
                            <div class="details">
                                @if(isset($item->url) && !empty($item->url))
                                    <div class="arrow">
                                        <a href="{{ $item->url }}" target="_blank">
                                            <i class="fi flaticon-next"></i>
                                        </a>
                                    </div>
                                @endif
                                @if(isset($item->title) && !empty($item->title))
                                    <div class="info">
                                        <h3>{{ $item->title }}</h3>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>   
                @endforeach             
            </div>
        </div>
    </section>
    @endif
@endsection
