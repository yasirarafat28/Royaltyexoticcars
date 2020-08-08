<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        * {
            box-sizing: border-box;
        }

        .input-group-addon.beautiful input[type="checkbox"], .input-group-addon.beautiful input[type="radio"] {
            display: none;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="main">
        <div class="container">
            <div class="imgdiv">
                <img src="/frontEnd/5af4be5feee5104947ba2c94_2018-ferrari-488-spyder-white-exterior-front-angle-royalty-exotic-cars.jpg"  style="width: 100px; height: 100px;">
            </div>
            <div class="imgdescription" style="width: 200px; height: 100px;">
                <h3>2018 Jeep Wrangler - White</h3>
                Thursday, August 27th 2020 @ 10am - 2pm
            </div>
        </div>
        <div class="container">
            <h2>Online Booking Agreement</h2>
            <form action="/action_page.php">
                <label for="fname">Primary Driver's Full Name:</label>
                <input type="text" id="fname" name="firstname" placeholder="As it appears on Driver's license">

                <label for="lname">Additional Driver's Full Name:</label>
                <input type="text" id="lname" name="lastname" placeholder="As it appears on Driver's license">

                <label for="country">Country of Residence</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>

                <label for="country">Property Damage Waiver ($3,500 Limit)</label>
                <select id="country" name="country">
                    <option value="australia">$99.00 Yes I would like to buy this property</option>
                    <option value="canada">$0.00 No I dont want to buy this property</option>
                </select>

                <label for="country">Tire Protection</label>
                <select id="country" name="country">
                    <option value="australia">$99.00 Yes I would like to buy this property</option>
                    <option value="canada">$0.00 No I dont want to buy this property</option>
                </select>

                <label for="country">Mechanical Break Down Insurance</label>
                <select id="country" name="country">
                    <option value="australia">$99.00 Yes I would like to buy this property</option>
                    <option value="canada">$0.00 No I dont want to buy this property</option>
                </select>

                <label for="country">Prepaid Gas Credit</label>
                <select id="country" name="country">
                    <option value="australia">$99.00 Yes I would like to buy this property</option>
                    <option value="canada">$0.00 No I dont want to buy this property</option>
                </select>

                <label for="country">Destination Packages</label>
                <select id="country" name="country">
                    <option value="australia">$99.00 Yes I would like to buy this property</option>
                    <option value="canada">$0.00 No I dont want to buy this property</option>
                </select>

                <div style="width: 100%; height: 45px; margin: auto; border: 1px solid lightgrey; padding: 8px; font-size: 0.8em; float: left;">
                    <input type="checkbox" id="fname"><span> I am over the age of 25 </span>
                    All drivers must be over the age of 25.
                    *Passengers must be at least 4' 9" or weigh more than 40lbs.
                </div>

                <div style="width: 100%; height: 45px; margin: auto; border: 1px solid lightgrey; padding: 8px; font-size: 0.8em; float: left;">
                    <input type="checkbox" id="fname">I have a valid driver's license
                    All drivers must have a valid driver's license from their country of citizenship.
                    *International driver's must have passport present.
                </div>

                <div style="width: 100%; height: 45px; margin: auto; border: 1px solid lightgrey; padding: 8px; font-size: 0.8em; float: left;">
                    <input type="checkbox" id="fname">I agree to follow all state and federal laws
                    Please drive in a safe, responsible, and legal manner.
                    
                    *Unsafe operation may result in fines/early termination of rental agreement.
                </div>

                <label for="country" style="margin-top: 6px;">How did you hear about us originally?</label>
                <select id="country" name="country">
                    <option value="australia">Organic</option>
                    <option value="canada">Social</option>
                    <option value="usa">Location</option>
                </select>

            </form>
        </div>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="/action_page.php">

                        <div class="row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="john@example.com">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="New York">

                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">State</label>
                                        <input type="text" id="state" name="state" placeholder="NY">
                                    </div>
                                    <div class="col-50">
                                        <label for="zip">Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="10001">
                                    </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="352">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <label>
                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        <input type="submit" value="Continue to checkout" class="btn">
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container">
                    <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span>
                    </h4>
                    <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                    <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                    <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                    <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                    <hr>
                    <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>