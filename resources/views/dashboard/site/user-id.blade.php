@extends('dashboard.base')
@section('title')
    Add Team | P C F - People Culture Forum
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div id="capture"
                    style="width: 16.2cm; height: 25.68cm;background-image: url(
                    @if ($member->gender == 'female') '/assets/images/women.jpg' 
                @else 
                '/assets/images/{{ $member->membership_type }}.jpg' 
                @endif
        ); 
        background-size: cover; 
        background-position: center;">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center align-items-center pt-5">
                                <div style="padding-right: 5mm; position: relative; display: flex; align-items: center;">
                                    <img src="/assets/img/logo.png" style="height: 3.9cm; width: 3.9cm;" alt=""
                                        srcset="">
                                    <div style="height: 2.5cm; width: 2px; background-color: white; margin-left: 5mm;">
                                    </div>
                                </div>
                                <div style="padding-top: 5mm;">
                                    <p class="text-white" style="font-size: 24px; font-weight: bolder;">
                                        PEOPLE'S <br>
                                        CULTURAL FORUM (P.C.F) <br>
                                        <span style="font-size: 21px; font-weight: lighter;">UAE National Committee</span>
                                    </p>
                                </div>
                            </div>


                            <div class="d-flex justify-content-center align-items-center" style="padding-top: 90px">
                                <img src="{{ $member->image }}" style="height:7.2cm;width:7.2cm;border-radius:3.375rem"
                                    alt="">
                            </div>

                            <div class="text-center p-2">
                                <h6
                                    style="text-transform: capitalize;font-size: 30px; padding-top: 20px; font-weight: bolder;color:black;">
                                    {{Str::title( $member->name) }}</h6>
                                <h6 style="text-transform: capitalize;font-size: 20px; font-weight: bolder; color:black;"> mob :
                                    {{ $member->mobile }}</h6>
                            </div>

                            <div style="padding-top: 30px"
                                class="d-flex justify-content-center align-items-center text-center">
                                <span class="p-2"
                                    style="border-radius: 5px 0 0 5px; background-color: #d02f2f;color:#ffff;width:85px;font-size: 12px;">Membership
                                    Number</span>
                                <span class="p-2"
                                    style="border-radius: 0 5px 5px 0; background-color:{{$member->gender == 'female' ? '#cb6ce6' : ($member->membership_type == 'active' ? '#D0C22F' : '#C0C0C0') }};color:#000000;width:130px; font-weight: bolder;font-size: 24px;text-transform:uppercase;">{{ $member->membership_number }}</span>
                            </div>

                            <div style="padding-top: 80px" class="d-flex justify-content-between">
                                <div>
                                    <h5 style=""> <b>Constituency :</b> {{ Str::title($member->mandalam) }}</h5>
                                    <h5> <b>District :</b> {{ Str::title($member->district) }}</h5>
                                </div>

                                <div>
                                    <h5> <b>Issued :</b> {{ $member->issued }}</h5>
                                    <h5> <b>Expiry :</b> {{ $member->expiry }}</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                    <p style="background-color: {{ $member->gender == 'female' ? '#cb6ce6' : ($member->membership_type == 'active' ? '#D0C22F' : '#C0C0C0') }}; color: #000000; margin-top: 47px; padding: 7px;"
                        class="text-center">
                        <b>This Card is only used for PCF organization</b>
                    </p>
                    
                </div>


                <button class="btn btn-dark waves-effect waves-light m-4" id="screenshotBtn">Download Card</button>

            </div>
        </div>
    </div>
    </div>

    <!-- end main content-->

    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <script>
        document.getElementById('screenshotBtn').addEventListener('click', function() {
            const captureElement = document.getElementById('capture');

            html2canvas(captureElement).then(canvas => {
                // Convert canvas to an image
                const link = document.createElement('a');
                link.download = 'card.jpeg';
                link.href = canvas.toDataURL('image/png');
                link.click();
            }).catch(error => {
                console.error('Screenshot failed:', error);
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
@endsection
