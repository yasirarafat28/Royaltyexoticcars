@extends('layouts.front')
@section('content')
<style type="text/css">
  .toggle {
   	&:last-child {
        	border-bottom: 1px solid $lightgrey;
   	}
	.toggle-title {
		position: relative;
		display: block;
		border-top: 1px solid $lightgrey;
		margin-bottom: 6px;
			h3 {
				font-size: 20px;
				margin: 0px;
				line-height: 1;
				cursor: pointer;
				font-weight:200;

			}
			&.active h3 {}
		}
		.toggle-inner {
			padding: 7px 25px 10px 25px;
			display: none;
			margin: -7px 0 6px;
			div {
				max-width: 100%;
			}
		}
		.toggle-title {
			.title-name {
				display: block;
				padding: 25px 25px 14px;
			}
			a i {
				font-size: 22px;
				margin-right: 5px;
			}
			i {
				position: absolute;
				background: url('http://arielbeninca.com/Storage/plus_minus.png') 0px -24px no-repeat;
				width: 24px;
				height: 24px;
				-webkit-transition: all 0.3s ease;
				-moz-transition: all 0.3s ease;
				-o-transition: all 0.3s ease;
				-ms-transition: all 0.3s ease;
				transition: all 0.3s ease;
				margin: 20px;
				right: 0;
			}
			&.active i {
				background: url('http://arielbeninca.com/Storage/plus_minus.png') 0px 0px no-repeat;
			}
		}
	}
</style>
  <div class="main">

    <div class="faqs__container">
      <h1 class="text-center my-5">Frequently Asked Questions</h1>
      
      <div class="card card-default">
      
        <div class="card-header">
        
          FAQ's
        
        </div>

        <div class="card-body">
        
          <ul class="list-group">
        
            @foreach($faqs as $faq)
            <div class="toggle" style="padding:10px; border-bottom: 1px solid lightgrey;">
	            <div class="toggle-title">
		            <h5>
		              <i></i>
		                <span class="title-name">{{ $faq->question }}</span>
		            </h5>
	            </div>
	            <div class="toggle-inner">
		            <p>{{ $faq->descripton }}</p>
	            </div>
            </div>
            @endforeach

          </ul>
        
        </div>

      </div>
      
    </div>
  </div>
<script>
  if( jQuery(".toggle .toggle-title").hasClass('active') ){
      jQuery(".toggle .toggle-title.active").closest('.toggle').find('.toggle-inner').show();
  }
  jQuery(".toggle .toggle-title").click(function(){
      if( jQuery(this).hasClass('active') ){
        jQuery(this).removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
      }
      else{	jQuery(this).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);
      }
  });
</script>
@endsection
