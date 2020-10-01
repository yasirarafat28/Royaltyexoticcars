<div class="single-car-wrap">
	<div class="single-car-thumb">
        <img src="{{url($record->feature_image??'')}}"  onerror="this.src='/no-image.png';">
    </div>


	<div class="single-car-info">

		<div class="rentals__header">
			<img src="{{url($record->brand->photo??'')}}" style="max-width: 100px !important;" alt="{{$record->brand->name??''}}" class="rentals__logo" title="{{$record->brand->name??''}}">

			<div class="trending__embed w-embed">
                <div class="rentals__label">
                     {{ $record->category->name??'' }}</div>
			</div>
		</div>
        <h2>
            <a href="/vehicle/{{base64_encode($record->id)}}/{{ $record->slug }}" style="display: flex">
                <img src="{{url($record->model_image??'')}}" style="height: 1em !important" onerror="this.remove()" height="25px" style="margin-right: 7px" class="rentals__logo" title="{{$record->model??''}}">
                {{ $record->name }}
                </a>
                </h2>
		<div class="rentals__info ">
            <!--
            @if($record->four_hour=='yes')
                <div>4 Hrs: $</div>
                <div>{{ $record->four_hour_price }}</div>
            @endif

            @if($record->eight_hour=='yes')
                <div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;8 Hrs: $</div>
			    <div>{{ $record->eight_hour_price }}</div>
            @endif

            @if($record->full_day=='yes')
                <div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Full Day: $</div>
                <div>{{ $record->full_day_price }}</div>
            @endif

                -->

                <h5 class="text-secondary p-0">
                    <strong>Started at: </strong>

                    @if($record->four_hour=='yes')
                        @if($record->four_hour_discount)
                            $<span>{{number_format( $record->four_hour_discount ,2)}}</span>
                            <small><s>${{number_format( $record->four_hour_price ,2)}}</s></small>
                        @else
                            $ <span>{{number_format( $record->four_hour_price ,2)}}</span>
                        @endif

                    @elseif($record->six_hour=='yes')
                        @if($record->six_hour_discount)
                            $<span>{{number_format( $record->six_discount ,2)}}</span>
                            <small><s>${{number_format( $record->six_price ,2)}}</s></small>
                        @else
                            $ <span>{{number_format( $record->six_price ,2)}}</span>
                        @endif

                    @elseif($record->eight_hour=='yes')
                        @if($record->eight_hour_discount)
                            $<span>{{number_format( $record->eight_hour_discount ,2)}}</span>
                            <small><s>${{number_format( $record->eight_hour_price ,2)}}</s></small>
                        @else
                            $ <span>{{number_format( $record->eight_hour_price ,2)}}</span>
                        @endif

                    @elseif($record->twelve_hour=='yes')
                        @if($record->twelve_hour_discount)
                            $<span>{{number_format( $record->twelve_hour_discount ,2)}}</span>
                            <small><s>${{number_format( $record->twelve_hour_price ,2)}}</s></small>
                        @else
                            $ <span>{{number_format( $record->twelve_hour_price ,2)}}</span>
                        @endif
                    @elseif($record->full_day=='yes')
                        @if($record->four_hour_discount)
                            $<span>{{number_format( $record->full_day_discount ,2)}}</span>
                            <small><s>${{number_format( $record->full_day_price ,2)}}</s></small>
                        @else
                            $ <span>{{number_format( $record->full_day_price ,2)}}</span>
                        @endif
                    @endif


                </h5>

	    </div>
        <!--<p>{{ substr(strip_tags($record->description),0,100) }} ...</p>-->
		<ul class=" mt-2 car-info-list d-flex">
            <li>{{$record->model}}</li>
            <li>{{$record->transmission}}</li>
            <li>{{$record->color}}</li>
        </ul>
        <div style="display: flex;flex-flow: wrap;">


            <a href="/vehicle-booking/{{base64_encode($record->id)}}" class="rental__cta--text btn-success text-uppercase mr-auto btn-rounded" > <i class="fa fa-plus mr-2"> </i> Book Now</a>
            <a href="/vehicle/{{base64_encode($record->id)}}/{{$record->slug}}" class="rental__cta--text btn-secondary text-uppercase ml-auto btn-rounded" > <i class="fa fa-eye mr-2"> </i> Details</a>

        </div>

    </div>
</div>
