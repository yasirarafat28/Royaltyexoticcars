@extends('layouts.front')
@section('content')
	<div class="main">
		<div class="container-fluid  extra-top-margin">
			<div class="crumbsbar clearfix">
				<div class="crumbsbar__wrapper">
					<div data-delay="0" data-hover="1" class="crumbsbar__dropdown w-dropdown">
						<div class="crumbsbar__toggle w-dropdown-toggle">
							<div>
                                @if($current_category)
                                    {{$current_category->name}}
                                @else
                                    All Category
                                @endif
                            </div>
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
												<a href="/vehicles?category={{ $category->slug }}" class="crumbsbar__link w-dropdown-link">{{ $category->name }}</a>
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
							<div>

                                @if($current_brand)
                                    {{$current_brand->name}}
                                @else
                                    All Brands
                                @endif
                            </div><img
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
                        @if($current_category)
                            <div class="browse__heading--embed w-embed">
                                <h1 class="browse__h1">{{$current_category->name}}</h1>
                            </div>
                            <p class="browse__desc" style="font-size: 1em !important;">{{$current_category->description}}</p>
                        @else

                            <div class="browse__heading--embed w-embed">
                                <h1 class="browse__h1">All Fleet</h1>
                            </div>
                        @endif
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
                                    <div class="col-md-4 col-sm-6 mb-1 mt-1 mobile-nopadding">

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
