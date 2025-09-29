<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Membership Card</title>
    <style>
        @page { margin: 0; padding: 0; }
        body { margin: 0; padding: 0; font-family: sans-serif; }
        .card-container {
            width: 16.2cm;
            height: 25.68cm;
            background-image: url('{{ $member->gender == "female" 
                ? public_path("assets/images/women.jpg") 
                : public_path("assets/images/".$member->membership_type.".jpg") }}');
            background-size: cover;
            background-position: center;
            page-break-inside: avoid;
            padding: 20px;
        }
        .logo { height: 3.9cm; width: 3.9cm; }
        .profile { height: 7.2cm; width: 7.2cm; border-radius: 3.375rem; }
        .heading { font-size: 24px; font-weight: bolder; color: #fff; margin: 0; }
        .subheading { font-size: 21px; font-weight: lighter; color: #fff; }
        .name { font-size: 30px; font-weight: bold; color: #000; margin-top: 20px; }
        .mobile { font-size: 20px; font-weight: bold; color: #000; }
        .footer { margin-top: 47px; padding: 7px; text-align: center; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card-container">
        <!-- Replace flex header -->
<table style="width:100%; text-align:center; margin-top:20px;">
  <tr>
    <td style="width:20%; text-align:center;">
      <img src="{{ public_path('assets/img/logo.png') }}" class="logo">
    </td>
    <td style="width:2px; background-color:white;"></td>
    <td style="width:78%; text-align:left;">
      <p class="heading">
        PEOPLE'S <br> CULTURAL FORUM (P.C.F) <br>
        <span class="subheading">UAE National Committee</span>
      </p>
    </td>
  </tr>
</table>


        <div style="display:inline-block; text-align:center; margin-top:70px;">
  <img src="{{ asset($member->image) }}" style="height:7.2cm; width:7.2cm; border-radius:3.375rem;">
  <h3 style="font-size:30px; font-weight:bold; color:#000; margin-top:20px;">
    {{ Str::title($member->name) }}
  </h3>
  <p style="font-size:20px; font-weight:bold; color:#000;">Mob: {{ $member->mobile }}</p>
</div>


        <div style="display: flex; justify-content: center; margin-top: 30px;">
            <span style="background-color:#d02f2f; color:#fff; padding:5px; border-radius:5px 0 0 5px; width:85px; font-size:12px;">
                Membership<br>Number
            </span>
            <span style="background-color:{{ $member->gender == 'female' ? '#cb6ce6' : ($member->membership_type == 'active' ? '#D0C22F' : '#C0C0C0') }};
                         color:#000; padding:5px; border-radius:0 5px 5px 0; width:130px; 
                         font-weight:bold; font-size:24px; text-transform:uppercase;">
                {{ $member->membership_number }}
            </span>
        </div>

        <table style="width:100%; margin-top:80px; font-size:16px;">
  <tr>
    <td>
      <p><b>Constituency :</b> {{ Str::title($member->mandalam) }}</p>
      <p><b>District :</b> {{ Str::title($member->district) }}</p>
    </td>
    <td>
      <p><b>Issued :</b> {{ $member->issued }}</p>
      <p><b>Expiry :</b> {{ $member->expiry }}</p>
    </td>
  </tr>
</table>


        <p class="footer" style="background-color: {{ $member->gender == 'female' ? '#cb6ce6' : ($member->membership_type == 'active' ? '#D0C22F' : '#C0C0C0') }}; color:#000;">
            This Card is only used for PCF organization
        </p>
    </div>
</body>
</html>
