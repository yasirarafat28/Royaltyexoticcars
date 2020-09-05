<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Invoice</title>

    <style type="text/css" media="all">
        * {
            margin: 0;
            padding: 0;
            border: none;
            box-sizing: border-box;
        }
        body {
            font-family: 'Archivo', sans-serif;
            line-height: 1.4;
        }
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
        .text-left {
            text-align: left;
        }
        .brand-color {
            color: #2BD6B4 !important;
        }
        .invoice {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #d4d4d4;
            padding: 20px 30px;
        }
        .invoice-top {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .logo {
            width: 130px;
            border: 1px dashed #BABABA;
            width: 150px;
            height: 100px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
            padding: 15px;
            border-radius: 10px;
        }
        .logo img {
            width: 100%;
        }
        .top-info {
            text-align: right;
        }
        .top-info h1 {
            font-size: 26px;
            font-weight: 400;
            color: #000000;
            font-weight:600;
        }
        .top-info h2 {
            font-size: 22px;
            font-weight:600;
            margin: 5px 0;
        }
        .top-info p {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.2;
            color: #626262;
        }
        .invoice-billing {
            display: flex;
            margin: 40px -15px;
        }
        .invoice-billing .column {
            padding: 0 15px;
            flex: 1;
        }
        .invoice-billing .column h4 {
            font-size: 18px;
            font-weight: 500;
            color: #626262;
            margin: 0 0 10px 0;
        }
        .invoice-billing .column p {
            font-size: 16px;
            color: #626262;
            margin: 0;
        }
        .invoice-table {
            margin-bottom: 40px;
            position: relative;
        }
        .invoice-table .paid-logo {
            position: absolute;
            left: 85px;
            bottom: 60px;
            -webkit-transform: rotate(-35deg);
            -moz-transform: rotate(-35deg);
            -ms-transform: rotate(-35deg);
            -o-transform: rotate(-35deg);
            transform: rotate(-35deg);
        }
        .invoice-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .invoice-table table thead th {
            font-size: 18px;
            font-weight: 500;
            color: #000000;
            padding: 10px 0;
            text-transform: uppercase;
            border-bottom: 1px solid #000000;
        }
        .invoice-table table tbody td {
            font-size: 16px;
            font-weight: 400;
            color: #000000;
            padding: 12px 0;
        }
        .invoice-table table .f5 {
            font-size: 20px;
            padding: 10px 0;
        }
        .top-border {
            border-top: 1px solid #000000;
        }
        .note-box {
            border: 1px solid #F8F8FA;
            border-radius: 10px;
        }
        .note-box h3 {
            display: block;
            padding: 6px 15px;
            font-size: 22px;
            font-weight: 500;
            color: #000000;
            background-color: #F8F8FA;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
        }
        .note-box .note {
            padding: 15px;
            font-size: 15px;
        }
        .note-box .note a {
            color: #2BD6B4;
        }
        .invoice-bottom {
            padding: 30px 10px 10px;
            text-align: center;
        }
        .invoice-bottom p {
            font-size: 16px;
            font-weight: 400;
            color: #000000;
            margin: 0;
        }
        .invoice-bottom p a {
            color: #000000;
        }
        .print-invoice {
            display: inline-block;
            padding: 8px 30px;
            background-color: #2BD6B4;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        @media print
        {
            .no-print
            {
                display: none !important;
            }
        }
    </style>
</head>
<body>

<div class="invoice-wrapper ">
    <div class="invoice">
        <div class="invoice-top">
            <div class="logo">
                <img src="/logo.png" alt="{{$setting->company_name}}">
            </div>
            <div class="top-info">
                <h1 class="brand-color">Invoice no: {{$order->txn_id}}</h1>
                <h2 class="brand-color">{{$setting->company_name}}</h2>
                <p>{{$setting->address}} <br/>{{$setting->phone}}<br/>{{$setting->email}} </p>
            </div>
        </div>
        <div class="invoice-billing">
            <div class="column">
                <h4 class="brand-color">Bill to</h4>
                <h2 class="to">{{$order->name}}</h2>
                <p class="address">{{$order->address}}</p>
                <p class="email"><a href="mailto:john@example.com">{{$order->email}}</a></p>
            </div>
            <div class="column text-right">
                <h4 class="brand-color">Invoice Time</h4>
                <p>{{$order->created_at}}</p>
                <br/>
                <h4 class="brand-color">Reservation Time</h4>
                <p>{{date("l, F d Y @ h:ia",strtotime($order->reservation_time))}}</p>
            </div>
        </div>
        <div class="invoice-table">
            <table>
                <thead>
                <tr>
                    <th style="width: 15%;">#</th>
                    <th class="text-left">DESCRIPTION</th>
                    <th class="text-right">TOTAL</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td class="text-left"><strong>Fare :</strong></td>
                    <td class="total text-right f5">${{number_format($order->fare,2)}}</td>
                </tr>


                <!--<tr>
                    <td>1</td>
                    <td class="text-left"><strong>International Full Coverage Insurance :</strong></td>
                    <td class="total">${{$order->international_full_coverage_insurance}}</td>
                </tr>


                <tr>
                    <td>2</td>
                    <td class="text-left"><strong>Supplemental Liability Insurance :</strong></td>
                    <td class="total">${{$order->liability_insurance}}</td>
                </tr>-->


                <tr>
                    <td>3</td>
                    <td class="text-left"><strong>Property Damage Waiver  :</strong></td>
                    <td class="total text-right f5">${{number_format($order->property_damage_waiver,2)}}</td>
                </tr>



                <tr>
                    <td>4</td>
                    <td class="text-left"><strong>Tire Protection  :</strong></td>
                    <td class="total text-right f5">${{number_format($order->tire_protection,2)}}</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td class="text-left"><strong>Mechanical Break Down Insurance  :</strong></td>
                    <td class="total text-right f5">${{number_format($order->mechanical_breakdown_coverage,2)}}</td>
                </tr>

                <tr>
                    <td>6</td>
                    <td class="text-left"><strong>Prepaid Gas Credit  :</strong></td>
                    <td class="total text-right f5">${{number_format($order->gas_credit,2)}}</td>
                </tr>
                <tr class="top-border">
                    <td colspan="2" class="text-right f5">Sub-Total</td>
                    <td class="text-right f5">${{number_format($order->total,2)}}</td>
                </tr>

                <tr>
                    <td colspan="2" class="text-right f5">Tax</td>
                    <td class="text-right f5"> ${{number_format($order->tax,2)}}</td>
                </tr>

                <tr>

                    <td colspan="2" class="text-right f5">Dsicount</td>
                    <td class="text-right f5"> - ${{number_format($order->discount,2)}}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right f5">Grand Total</td>
                    <td class="text-right f5">${{number_format($order->grand_total,2)}}</td>
                </tr>
                </tbody>
            </table>
            <div class="paid-logo">

                <img src="{{url('/frontEnd/invoice/'.$order->payment_status.'.png')}}" alt="Paid" width="110px">
            </div>
        </div>
        <div class="invoice-bottom">
            <p> This is a computer generated invoice and requires no signature.</p>
        </div>
    </div>
</div>

<div class="text-center no-print" style="margin: 30px 0">
    <a href="#" class="print-invoice" id="print-invoice" onclick="window.print()">Print</a>
</div>

</body>
</html>
