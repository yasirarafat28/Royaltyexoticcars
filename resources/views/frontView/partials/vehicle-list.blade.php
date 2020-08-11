<div class="single-car-wrap">
	<div class="single-car-thumb"><img src={{url($record->feature_image??'')}}></div>


	<div class="single-car-info">

		<div class="rentals__header">
			<img src="{{url($record->brand->photo??'')}}" width="50px" alt="{{$record->brand->name??'}}" class="rentals__logo" title="{{$record->brand->name??'}}">

			<div class="trending__embed w-embed">
				<div class="rentals__label">{{ $record->body }}</div>
			</div>
		</div>
		<h2><a href="/vehicle/{{ $record->id }}">{{ $record->name }}</a></h2>
		<div class="rentals__info">
			<div>4 Hrs: $</div>
		    <div>{{ $record->four_hour_price }}</div>
			<div>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;8 Hrs: $</div>
			<div>{{ $record->eight_hour_price }}</div>
	    </div>
		<p>{{ substr(strip_tags($record->description),0,100) }} ...</p>
		<ul class="car-info-list">
			<li>AC</li>
			<li>Diesel</li>
			<li>Auto</li>
		</ul>
		<p class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star unmark"></i>
        </p>

		<a href="#CarBookModal" class="rental__cta--text btn-success "
			data-toggle="modal">Book It</a>
	</div>
</div>
