@extends('new.base')
@section('title')

@endsection
<style>

.container {
    text-align: center;
}

.chairman {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
     /* Stack image and text vertically */
}


.img-holder {
    overflow: hidden; /* Ensures image doesn't overflow the container */
    position: relative;
    border-radius: 20px; /* Optional: Makes the image circular */
}

.img-holder img {
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
}

.img-holder:hover img {
    transform: scale(1.1); /* Scales up the image */
}



</style>
@section('content')
        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                {{-- <div class="row">
                    <div class="col col-xs-12">
                        <h2>Team</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>Team</li>
                        </ol>
                    </div>
                </div> <!-- end row --> --}}
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->

        

        <section class="team-section section-padding flex justify-center items-center">
            <div class="container text-center">
                <h1 class="text-center text-chilanka" style="padding-bottom: 40px">ചെയർമാൻ</h1>
        
                <div class="row justify-center">
                    <div class="col col-xs-12">
                        <div class="chairman">
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img style="height: 250px" src="{{ $members['chairman'][0]->image }}" alt="{{ $members['chairman'][0]->name }}">
                                    </div>
                                </div>
                                <div class="details">
                                    <h3 class="text-center text-chilanka">{{ $members['chairman'][0]->name }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        
        <!-- start team-section -->
        <section class="team-section">
            <div class="container">
                <h1 class="text-center text-chilanka" style="padding-bottom: 40px">വൈസ് ചെയർമാൻമാർ</h1>

                <div class="row">

                    <div class="col col-xs-12">
                        <div class="team-grids">
                            @foreach ($members['vice chairmen'] as $member)
                                <div class="grid">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img style="width: 75%" src="{{ $member->image }}" alt="{{ $member->name }}">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>{{ $member->name }}</h3>
                                        <span>വൈസ് ചെയർമാൻ</span>
                                    </div>
                                </div>
                            @endforeach                            
                            
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end team-section -->

          <!-- start team-section -->
          <section class="team-section">
            <div class="container">
                <h1 class="text-center text-chilanka" style="padding-bottom: 40px">ജനറല്‍ സെക്രട്ടറിമാര്‍</h1>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids">
                            @foreach ($members['General Secretary'] as $member)
                                <div class="grid">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img style="width: 75%" src="{{ $member->image }}" alt="{{ $member->name }}">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>{{ $member->name }}</h3>
                                        <span>ജനറല്‍ സെക്രട്ടറി</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>

        <section class="team-section ">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids">
                            <h1 class="text-center text-chilanka" style="padding-bottom: 40px">സെക്രട്ടറിമാര്‍</h1>
                            <div style="display: flex;justify-content: center;">
                                @foreach ($members['Secretary'] as $member)
                                    <div style="padding-right: 40px" class="">
                                        <div class="img-social">
                                            <div class="img-holder">
                                                <img style="width: 75%" src="{{ $member->image }}" alt="{{ $member->name }}">
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h3>{{ $member->name }}</h3>
                                            <span>സെക്രട്ടറി</span>
                                        </div>
                                    </div>
                                @endforeach                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>


        <section class="team-section ">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids">
                            <h1 class="text-center text-chilanka" style="padding-bottom: 40px">ട്രഷറർ</h1>
                            @foreach ($members['Treasurer'] as $member)
                                <div class="">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="{{ $member->image }}" alt="{{ $member->name }}">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>{{ $member->name }}</h3>
                                        <span>ട്രഷറർ</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end team-section -->
@endsection
