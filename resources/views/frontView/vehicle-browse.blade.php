@extends('layouts.front')
@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="crumbsbar w-clearfix">
				<div class="crumbsbar__wrapper">
					<div data-delay="0" data-hover="1" class="crumbsbar__dropdown w-dropdown">
						<div class="crumbsbar__toggle w-dropdown-toggle">
							<div>All Category</div>
                            <img
								src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e2fc2432d430001146dc7_icon-arrow-down-black.svg"
								alt="" class="crumbsbar__icon" />
						</div>
						<nav class="crumbsbar__pane w-dropdown-list">
							<div class="crumbsbar__list">
								<div class="w-dyn-list">
									<div role="list" class="w-dyn-items">

										@foreach($categories as $category)

											<div role="listitem" class="w-dyn-item">
												<a href="/vehicles?{!! http_build_query(\Request::except('category')) !!}{{\Request::except('category')?'&':''}}category={{ $category->slug }}" class="crumbsbar__link w-dropdown-link">{{ $category->name }}</a>
											</div>

										@endforeach

									</div>
								</div>
							</div>
						</nav>
					</div>
                    @if(sizeof($sub_categories))
                        <img
                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a5f52c6915f44000178c85e_right arrow.svg"
                            alt="" class="crumbsbar__divider" />
                        <div data-delay="0" data-hover="1" class="crumbsbar__dropdown w-dropdown">
                            <div class="crumbsbar__toggle w-dropdown-toggle">
                                <div>All </div>
                                <div>Cars</div><img
                                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e2fc2432d430001146dc7_icon-arrow-down-black.svg"
                                    alt="" class="crumbsbar__icon" />
                            </div>
                            <nav class="crumbsbar__pane w-dropdown-list">
                                <div class="crumbsbar__list">
                                    <div class="w-dyn-list">
                                        <div role="list" class="w-dyn-items">

                                            @foreach($sub_categories as $sub_category)

                                                <div role="listitem" class="w-dyn-item">
                                                    <a href="/vehicles?{!! http_build_query(\Request::except('sub_category')) !!}{{\Request::except('sub_category')?'&':''}}sub_category={{ $sub_category->slug }}" class="crumbsbar__link w-dropdown-link">{{ $sub_category->name }}</a>
                                                </div>

                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    @endif
                    <img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a5f52c6915f44000178c85e_right arrow.svg"
						alt="" class="crumbsbar__divider" />
					<div data-delay="0" data-hover="1" class="crumbsbar__dropdown w-dropdown">
						<div class="crumbsbar__toggle w-dropdown-toggle">
							<div class="w-condition-invisible">Cars</div>
							<div>All Brands</div><img
								src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e2fc2432d430001146dc7_icon-arrow-down-black.svg"
								alt="" class="crumbsbar__icon" />
						</div>
						<nav class="crumbsbar__pane w-dropdown-list">
							<div class="crumbsbar__list">
								<div class="w-dyn-list">
									<div role="list" class="w-dyn-items">

										@foreach($brands as $brand)

											<div role="listitem" class="w-dyn-item">
												<a href="/vehicles?{!! http_build_query(\Request::except('brand')) !!}{{\Request::except('brand')?'&':''}}brand={{ $brand->slug }}" class="crumbsbar__link w-dropdown-link">{{ $brand->name }}</a>
											</div>

										@endforeach

									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="browse">
				<div class="browse__nav">
					<div class="browse__heading">
						<div class="browse__heading--embed w-embed">
							<h1 class="browse__h1">Car Rentals</h1>
						</div>
						<div class="browse__heading--embed w-condition-invisible w-embed">
							<h1 class="browse__h1"> Rentals</h1>
						</div>
						<div class="browse__heading--embed w-condition-invisible w-embed">
							<h1 class="browse__h1"> Rentals</h1>
						</div>
						<div class="browse__heading--embed w-condition-invisible w-embed">
							<h1 class="browse__h1"> Rentals</h1>
						</div>
						<p class="browse__desc">Ranging from American muscle to European masterpieces, from race cars to
							luxury cars; all of our car rentals are exotic, rare, and exclusive and demand the attention
							of everyone nearby.</p>
						<p class="browse__desc w-condition-invisible w-dyn-bind-empty"></p>
						<p class="browse__desc w-condition-invisible w-dyn-bind-empty"></p>
						<p class="browse__desc w-condition-invisible w-dyn-bind-empty"></p>
					</div>
					<div class="quicklinks quicklinks__browse w-dyn-list">
						<div role="list" class="w-dyn-items">

							@foreach($brands as $brand)

								<div role="listitem" class="w-dyn-item">
									<a href="/vehicles?{!! http_build_query(\Request::except('brand')) !!}{{\Request::except('brand')?'&':''}}brand={{ $brand->slug }}"
										class="quicklinks__link w-inline-block"><img
										src="{{url($brand->photo)}}"
										alt="Bugatti" class="quicklinks__logo" />
										<div class="quicklinks__details">
											<div>{{ $brand->name }}</div>
											<div class="quicklinks__desc">{{ $brand->name }} </div>
										</div>
									</a>
								</div>

							@endforeach

						</div>
					</div>
				</div>
				<div class="browse__pane">
                    <div class="container text-left">
                        <div class="car-list-content">
                            <div class="row">

                                @foreach($records as $record)
                                    <div class="col-md-4 col-sm-6 mb-3 mt-3">

										@include('frontView.partials.vehicle-list')

                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
@endsection
