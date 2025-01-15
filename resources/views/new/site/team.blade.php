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
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Team</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>Team</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
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
                                        <img style="height: 300px" src="assets/img/leader/chairman.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3 class="text-center text-chilanka">അബ്ദുന്നാസർ മഅദനി</h3>
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
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/9.jpg" alt>
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
                                        <img src="assets/img/leader/7.jpg" alt>
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
                                        <img src="assets/img/leader/2.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>ടി. എ. മുഹമ്മദ് ബിലാൽ</h3>
                                    <span>വൈസ് ചെയർമാൻ</span>

                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/1.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>സിയാവുദ്ദീൻ തങ്ങൾ പാലക്കാട്</h3>
                                    <span>വൈസ് ചെയർമാൻ</span>

                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/13.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>ശശി പൂവഞ്ചിന</h3>
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
                <h1 class="text-center text-chilanka" style="padding-bottom: 40px">ജനറല്‍ സെക്രട്ടറിമാര്‍</h1>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids">
                
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/6.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>വി.എം.അലിയാര്‍</h3>
                                    <span>ജനറല്‍ സെക്രട്ടറി</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/8.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3> അജിത്കുമാര്‍ ആസാദ്</h3>
                                    <span>ജനറല്‍ സെക്രട്ടറി</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/14.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3> മുഹമ്മദ് റജീബ്</h3>
                                    <span>ജനറല്‍ സെക്രട്ടറി</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/5.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3> മജീദ് ചേര്‍പ്പ്</h3>
                                    <span>ജനറല്‍ സെക്രട്ടറി</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/10.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>മൈലക്കാട് ഷാ</h3>
                                    <span>ജനറല്‍ സെക്രട്ടറി</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/11.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>ജാഫര്‍അലി ദാരിമി</h3>
                                    <span>ജനറല്‍ സെക്രട്ടറി</span>
                                </div>
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
                            <h1 class="text-center text-chilanka" style="padding-bottom: 40px">സെക്രട്ടറിമാര്‍</h1>
                            <div style="display: flex;justify-content: center;">
                                <div style="padding-right: 40px" class="">
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="assets/img/leader/12.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>സലിം ബാബു</h3>
                                        <span>സെക്രട്ടറി</span>
                                    </div>
                                </div>
                                <div style="padding-left: 40px" >
                                    <div class="img-social">
                                        <div class="img-holder">
                                            <img src="assets/img/leader/4.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>രാജിമണി തൃശൂര്‍</h3>
                                        <span>സെക്രട്ടറി</span>
                                    </div>
                                </div> 
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
                            <div class="">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/img/leader/3.jpg" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>ഇബ്രാഹീം തിരൂരങ്ങാടി</h3>
                                    <span>ട്രഷറർ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end team-section -->
@endsection
