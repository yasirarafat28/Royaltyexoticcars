@extends('layouts.front')
@section('content')
  <div class="main" style="padding-top:30px;">
    <div class="policy__container">
      <div class="rentalpolicy">
        <div class="policy__heading">
          <h1 class="policy__h1">Rental Exotics Beasts ( COVID-19 )</h1>
          <div class="policy__timestamp">Updated Aug 23, 2020</div>
          <div class="policy__note">*If you have any questions about these Terms of Use, please contact us at<br>
            {{ $setting->email }}.<br>{{ $setting->address }}.</div>
        </div>
        <div class="policy__richtext w-richtext">
          <div class="policy__timestamp">Cleaning of all Vehicles</div>

          <p>Each of our vehicles is thoroughly cleaned between every rental and backed with the Complete Clean Pledge. This includes washing, vacuuming, general wipe down, and sanitizing with a disinfectant that meets leading health authority requirements, with particular attention to more than 20-plus high-touch points including:</p>


          <p>1- Key / key fob<br>
            2-  Steering wheel<br>
            3-  Steering column<br>
            4-  Seat belts<br>
            5-  Center console<br>
            6-  Door interiors<br>
            7-  Door pockets<br>
            8-  Interior door handles<br>
            9-  Exterior door handles<br>
            10- Seat pockets/seat surfaces<br>
            11- Areas between seats & consoles<br>
            12- Areas between seats & doorjambs<br>
            13- Cupholders / compartments<br>
            14- Instrument panel<br>
            15- Accessory panel/touchscreen<br>
            16- Rearview mirror/side mirrors<br>
            17- Visors/visor mirrors<br>
            18- Dashboard / vents<br>
            19- Gearstick/gear shift<br>
            20- Trunk release<br></p>


                    <p>Among any other high-touch areas.<br>
            We also have measures in place to immediately isolate and quarantine any vehicle if needed.</p>

            <br>{{ $setting->company_name }}<br>
            {{ $setting->address }}<br>{{ $setting->phone }}<br>{{ $setting->email }}<br><br>
        </div>
      </div>
    </div>
  </div>
@endsection
