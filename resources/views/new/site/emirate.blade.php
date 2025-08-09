@extends('new.base')
@section('title')
@endsection
@section('content')
    <section class="blog-section section-padding">
        <div class="container">


            <h1 style="text-center text-chilanka" style="padding-bottom: 40px"></h1>



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
                                <div class="grid">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="/assets/img/leader/9.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3 class="text-chilanka">വർക്കല രാജ്</h3>
                                        <span class="text-chilanka">വൈസ് ചെയർമാൻ</span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="/assets/img/leader/7.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3 class="text-chilanka">അഡ്വ. മുട്ടം നാസർ</h3>
                                        <span class="text-chilanka">വൈസ് ചെയർമാൻ</span>

                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="/assets/img/leader/2.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3 class="text-chilanka">ടി. എ. മുഹമ്മദ് ബിലാൽ</h3>
                                        <span class="text-chilanka">വൈസ് ചെയർമാൻ</span>

                                    </div>
                                </div>
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
                            <h2 class="text-heading text-chilanka" style="padding-top: 20px; font-size:2.06rem">വൈസ്&nbsp;പ്രസിഡന്റുമാർ</h2>
                        </div>
                        <div class="section-title-s4">
                            <ul>
                                <h3 class="text-chilanka" style="color: rgb(72, 72, 72)">വർക്കല രാജ്</h3>
                                <h3 class="text-chilanka" style="color: rgb(72, 72, 72)">അഡ്വ. മുട്ടം നാസർ</h3>
                                <h3 class="text-chilanka" style="color: rgb(72, 72, 72)">ടി. എ. മുഹമ്മദ് ബിലാൽ</h3>
                            </ul>
                        </div>
                    </div>

                    <!-- Joint Secretaries -->
                    <div class="col-md-6">
                        <div class="section-title-s4">
                            <h2 class="text-heading text-chilanka" style="padding-top: 20px; font-size:2.06rem">ജോ:&nbsp;സെക്രട്ടറിമാർ</h2>
                        </div>
                        <div class="section-title-s4">
                            <ul>
                                <h3 class="text-chilanka" style="color: rgb(72, 72, 72)">വർക്കല രാജ്</h3>
                                <h3 class="text-chilanka" style="color: rgb(72, 72, 72)">അഡ്വ. മുട്ടം നാസർ</h3>
                                <h3 class="text-chilanka" style="color: rgb(72, 72, 72)">ടി. എ. മുഹമ്മദ് ബിലാൽ</h3>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </section>
@endsection
