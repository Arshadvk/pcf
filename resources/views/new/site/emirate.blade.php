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
                            {{ $emirate->name_mal }} എമിറേറ്റ്സ് കമ്മിറ്റി 2025-2026</h2>
                    </div>


                    <div class="row">



                        <div class="col col-xs-12">
                            <div class="team-grids">
                                @foreach ($section_one as $committe)
                                    <div class="grid">
                                        <div class="img-social">
                                            <div class="img-holder">
                                                <img src={{$committe->image ??  "/assets/img/user_tummy.png"}} alt>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h3 class="text-chilanka">{{ $committe->name }}</h3>
                                            <span class="text-chilanka">{{ $committe->position->name ?? '-' }}</span>

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

                    <!-- Joint Secretaries -->
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
                </div>
            </div>






        </div>
    </section>
@endsection
