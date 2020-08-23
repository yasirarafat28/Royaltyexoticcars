<style>
    /* Outer */
    .popup {
        width:100%;
        height:100%;
        display:none;
        position:fixed;
        top:0px;
        left:0px;
        background:rgba(0,0,0,0.75);
        z-index: 12;
    }

    /* Inner */
    .popup-inner {
        max-width:700px;
        width:90%;
        padding:10px 15px;
        position:absolute;
        top:50%;
        left:50%;
        -webkit-transform:translate(-50%, -50%);
        transform:translate(-50%, -50%);
        box-shadow:0px 2px 6px rgba(0,0,0,1);
        border-radius:10px;
        background:#fff;
    }

    /* Close Button */
    .popup-close {
        width:30px;
        height:30px;
        padding-top:4px;
        display:inline-block;
        position:absolute;
        top:0px;
        right:0px;
        transition:ease 0.25s all;
        -webkit-transform:translate(50%, -50%);
        transform:translate(50%, -50%);
        border-radius:1000px;
        background:rgba(0,0,0,0.8);
        font-family:Arial, Sans-Serif;
        font-size:20px;
        text-align:center;
        line-height:100%;
        color:#fff !important;
        cursor: pointer;
    }

    .popup-close:hover {
        -webkit-transform:translate(50%, -50%) rotate(180deg);
        transform:translate(50%, -50%) rotate(180deg);
        background:rgba(0,0,0,1);
        text-decoration:none;
    }



    .popup-scroll{
        overflow-y: scroll;
        max-height: 80vh;
        padding:0 1em 0 0;
    }
    .popup-scroll::-webkit-scrollbar {background-color:#EEE;width:10px;}
    .popup-scroll::-webkit-scrollbar-thumb {
        border:1px #EEE solid;border-radius:2px;background:#777;
        -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
        -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
    }
    .popup-scroll::-webkit-scrollbar-track {-webkit-box-shadow: 0 0 2px #ccc;box-shadow: 0 0 2px #ccc;}
</style>

<div class="popup" id="auto-first-popup" data-popup="popup-1">
    <div class="popup-inner">
        <h2 class="text-center">Get upto 20% off on your first booking!</h2>
        <img src="/upload/vehicles/200809101630.jpg" alt="">
        <div class="container-full">


        </div>
        <p><a data-popup-close="popup-1" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
</div>

<div class="modal fade" id="AutoStartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">

            <div class="popup-inner">


                <a class="popup-close close" data-popup-close="popup-1"   data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" href="#">&times;</span></a>

                <h2 class="text-center modal-title">Get upto 10% off on your first booking!</h2>
                <img src="/upload/vehicles/200809101630.jpg" alt="">
                <br>
                <div class="hero__note">Enjoy 10% unlimited discount on first booking! Use Voucher Code <span class="text-primary">NEWRENT10.</span></div>

                <br>
                <form action="{{url('/newsletter')}}" method="POST">
                    {{csrf_field()}}
                    <div class="input-group ">
                        <input type="email" class="form-control border-danger" name="newsletter" placeholder="Enter your email to get exclusive deals">

                        <div class="input-group-append bg-red ">
                            <a type="submit" href="#" class="input-group-text text-white border-0 text-uppercase font-weight-bold" style="background-color: red">
                                Subscribe
                            </a>
                        </div>
                    </div>
                </form>
                <br>
            </div>


        </div>
    </div>
</div>
