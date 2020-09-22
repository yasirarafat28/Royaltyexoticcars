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















    .Accordions {
        display: block;
        max-width: 800px;
        margin: auto;
    }

    .Accordion_item {
        width: 100%;
        height: auto;
        margin: 5px 0;
    }
    .Accordion_item:first-child {
        margin-top: 50px;
    }
    .Accordion_item .title_tab {
        width: 100%;

        color: black;
        padding: 12px 30px;
        cursor: pointer;
        transition: background-color 0.3s ease-in;
        border-radius: 4px;
    }
    .Accordion_item .title_tab .title {
        font-size: 24px;
        letter-spacing: 1px;
        position: relative;
    }
    .Accordion_item .title_tab .title .icon {
        position: absolute;
        right: 1%;
        top: calc(50% - 8px);
        width: 16px;
        height: 16px;
        background-color: transparent;
        transform: rotate(-90deg);
        transition: transform 0.3s ease-in;
    }
    .Accordion_item .title_tab .title .icon:before, .Accordion_item .title_tab .title .icon:after {
        content: "";
        position: absolute;
        height: 100%;
        width: 2px;
        background-color: #fcfcfc;
    }
    .Accordion_item .title_tab .title .icon:before {
        top: 0;
        left: 2px;
        transform: rotate(-45deg);
    }
    .Accordion_item .title_tab .title .icon:after {
        top: 0;
        right: 2px;
        transform: rotate(45deg);
    }

    .inner_content {
        width: 100%;
        height: auto;
        display: none;
        overflow: hidden;
    }
    .inner_content p {
        width: 98%;
        margin: auto;
        padding: 18px 15px;
        font-size: 16px;
        line-height: 28px;
        letter-spacing: 1px;
        opacity: 0;
        transform: translate3d(0px, 60px, 0px);
        transition: transform 0.6s cubic-bezier(0, 0.99, 0.44, 1.01), opacity 0.8s 0.1s cubic-bezier(0, 0.99, 0.44, 1.01);
    }

    /* ================================= */
    .Accordion_item .title_tab.active {
        background-color: lightgreen;
        transition: background-color 0.3s ease-in;
    }
    .Accordion_item .title_tab.active .title .icon {
        transform: rotate(0deg);
        transition: transform 0.3s ease-in;
    }
    .Accordion_item .title_tab:hover {
        background-color: lightgreen;
        transition: background-color 0.3s ease-in;
    }
    .Accordion_item .inner_content p.show {
        opacity: 1;
        transform: translate3d(0px, 0px, 0px);
        transition: opacity 0.8s cubic-bezier(0, 0.99, 0.44, 1.01), transform 0.6s 0.1s cubic-bezier(0, 0.99, 0.44, 1.01);
    }

    /* ================================= */
    .inner_content p span {
        font-size: 14px;
        line-height: 30px;
    }
    .inner_content p b {
        color: #f44336;
        font-size: 18px;
    }


</style>
  <div class="main">

    <div class="faqs__container">
      <h1 class="text-center my-5">Frequently Asked Questions</h1>


        <div class="Accordions">
            @foreach($faqs as $key=>$faq)
                <div class="Accordion_item">
                    <div class="title_tab bg-primary">
                        <h3 class="title">{{$faq->question}}<span class="icon"></span></h3>
                    </div>
                    <div class="inner_content">
                        <p>
                            {{$faq->descripton}}

                        </p>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
  </div>
@endsection
@section('script')


    <script>
        var $titleTab = $(".title_tab");
        $(".Accordion_item:eq(0)").find(".inner_content").find("p").addClass("show");
        $titleTab.on("click", function (e) {
            e.preventDefault();
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).next().stop().slideUp(500);
                $(this).next().find("p").removeClass("show");
            } else {
                $(this).addClass("active");
                $(this).next().stop().slideDown(500);
                $(this).parent().siblings().children(".title_tab").removeClass("active");
                $(this).parent().siblings().children(".inner_content").slideUp(500);
                $(this)
                    .parent()
                    .siblings()
                    .children(".inner_content")
                    .find("p")
                    .removeClass("show");
                $(this).next().find("p").addClass("show");
            }
        });

    </script>
@endsection
