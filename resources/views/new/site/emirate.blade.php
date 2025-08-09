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


            <!-- start team-section -->
            <section class="team-section">
                <div class="container">
                    <h1 class="text-center text-chilanka" style="padding-bottom: 40px">വൈസ് ചെയർമാൻമാർ</h1>

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
                                        <h3>വർക്കല രാജ്</h3>
                                        <span>വൈസ് ചെയർമാൻ</span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="/assets/img/leader/7.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>അഡ്വ. മുട്ടം നാസർ</h3>
                                        <span>വൈസ് ചെയർമാൻ</span>

                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="/assets/img/leader/2.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>ടി. എ. മുഹമ്മദ് ബിലാൽ</h3>
                                        <span>വൈസ് ചെയർമാൻ</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
            <!-- end team-section -->


             <!-- start team-section -->
            <section class="team-section">
                <div class="container">
                    <h1 class="text-center text-chilanka" style="padding-bottom: 40px">വൈസ് ചെയർമാൻമാർ</h1>

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
                                        <h3>വർക്കല രാജ്</h3>
                                        <span>വൈസ് ചെയർമാൻ</span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="/assets/img/leader/7.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>അഡ്വ. മുട്ടം നാസർ</h3>
                                        <span>വൈസ് ചെയർമാൻ</span>

                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="/assets/img/leader/2.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>ടി. എ. മുഹമ്മദ് ബിലാൽ</h3>
                                        <span>വൈസ് ചെയർമാൻ</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
            <!-- end team-section -->

        </div>
    </section>
@endsection
