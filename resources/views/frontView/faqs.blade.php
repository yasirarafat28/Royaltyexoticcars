@extends('layouts.front')
@section('content')
<style type="text/css">


    .faq-heading {
        font-weight: 400;
        font-size: 19px;
        -webkit-transition: text-indent 0.2s;
        text-indent: 20px;
        color: #333;
    }

    .faq-text {
        font-family: Open Sans;
        font-weight: 400;
        color: #919191;
        width:95%;
        padding-left:20px;
        margin-bottom:30px;
    }

    .faq {
        margin: 0 auto;
        background: white;
        border-radius: 4px;
        position: relative;
        border: 1px solid #E1E1E1;
    }
    .faq label {
        display: block;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        height: 56px;
        padding-top:1px;

        background-color: #FAFAFA;
        border-bottom: 1px solid #E1E1E1;
    }

    .faq input[type="checkbox"] {
        display: none;
    }

    .faq .faq-arrow {
        width: 18px;
        height: 18px;
        transition: -webkit-transform 0.8s;
        transition: transform 0.8s;
        transition: transform 0.8s, -webkit-transform 0.8s;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        border-top: 4px solid red;
        border-right: 4px solid red;
        float: right;
        position: relative;
        top: -20px;
        right: 27px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .faq input[type="checkbox"]:checked + label > .faq-arrow {
        transition: -webkit-transform 0.8s;
        transition: transform 0.8s;
        transition: transform 0.8s, -webkit-transform 0.8s;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
    }
    .faq input[type="checkbox"]:checked + label {
        display: block;
        background: rgba(255,255,255,255) !important;
        color: #4f7351;
        height: 225px;
        transition: height 0.8s;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .faq input[type='checkbox']:not(:checked) + label {
        display: block;
        transition: height 0.8s;
        height: 60px;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    ::-webkit-scrollbar {
        display: none;
    }

    label {
        margin-bottom: 0px !important;
    }

</style>
  <div class="main">

    <div class="faqs__container">
      <h1 class="text-center my-5">Frequently Asked Questions</h1>

        <div class="container">
            <div class='faq'>


                @foreach($faqs as $key=>$faq)
                <input id='faq-{{$key}}' type='checkbox'>
                <label for='faq-{{$key}}'>
                    <p class="faq-heading">{{$faq->question}}</p>
                    <div class='faq-arrow'></div>
                    <p class="faq-text">{{$faq->descripton}}</p>
                </label>
                @endforeach
            </div>
        </div>

      <!--<div class="card card-default">

        <div class="card-header">

          FAQ's

        </div>

        <div class="card-body">

          <ul class="list-group">

            @foreach($faqs as $faq)
            <div class="toggle">
	            <div class="toggle-title">
		            <h4>
		              <i></i>
		                <span class="title-name">{{ $faq->question }}</span>
		            </h4>
	            </div>
	            <div class="toggle-inner">
		            <p>{{ $faq->descripton }}</p>
	            </div>
            </div>
            @endforeach

          </ul>

        </div>

      </div>-->

    </div>
  </div>
@endsection
