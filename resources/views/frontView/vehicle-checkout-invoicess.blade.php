<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    #invoice{
        padding: 0px 30px 30px 30px;
    }

    .invoice {
        position: relative;
        background-color: #FFF;
        min-height: 680px;
        padding: 0px 15px 15px 15px;
    }

    .invoice header {
        padding: 0px 0;
        margin-bottom: 0px;
        border-bottom: 1px solid #3989c6
    }

    .invoice .company-details {
        text-align: right
    }

    .invoice .company-details .name {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .contacts {
        margin-bottom: 0px
    }

    .invoice .invoice-to {
        text-align: left
    }

    .invoice .invoice-to .to {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .invoice-details {
        text-align: right
    }

    .invoice .invoice-details .invoice-id {
        margin-top: 0;
        color: #3989c6
    }

    .invoice main {
        padding-bottom: 0px
    }

    .invoice main .thanks {
        margin-top: -100px;
        font-size: 2em;
        margin-bottom: 5px
    }

    .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #3989c6
    }

    .invoice main .notices .notice {
        font-size: 1.2em
    }

    .invoice table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 5px;
    }

    .invoice table td,.invoice table th {
        padding: 15px;
        background: #eee;
        border-bottom: 1px solid #fff;
    }

    .invoice table th {
        white-space: nowrap;
        font-weight: 200;
        font-size: 16px
    }

    .invoice table td h3 {
        margin: 0;
        font-weight: 200;
        color: #3989c6;
        font-size: 1.2em
    }

    .invoice table .qty,.invoice table .total,.invoice table .unit {
        text-align: right;
        font-size: 1.2em
    }

    .invoice table .no {
        color: #fff;
        font-size: 1.6em;
        background: #3989c6
    }

    .invoice table .unit {
        background: #ddd
    }

    .invoice table .total {
        background: #3989c6;
        color: #fff
    }

    .invoice table tbody tr:last-child td {
        border: none
    }

    .invoice table tfoot td {
        background: 0 0;
        border-bottom: none;
        white-space: nowrap;
        text-align: right;
        padding: 10px 20px;
        font-size: 1.2em;
        border-top: 1px solid #aaa
    }

    .invoice table tfoot tr:first-child td {
        border-top: none
    }

    .invoice table tfoot tr:last-child td {
        color: #3989c6;
        font-size: 1.4em;
        border-top: 1px solid #3989c6
    }

    .invoice table tfoot tr td:first-child {
        border: none
    }

    .invoice footer {
        width: 100%;
        text-align: center;
        color: #777;
        border-top: 1px solid #aaa;
        padding: 8px 0
    }

    @media print {
        .invoice {
            font-size: 11px!important;
            overflow: hidden!important
        }

        .invoice footer {
            position: absolute;
            bottom: 10px;
            page-break-after: always
        }

        .invoice>div:last-child {
            page-break-before: always
        }
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
<div id="invoice">
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row" style="display:flex; justify-content:space-between;">
                    <div class="col-sm-6">

                        <img src="images/logo.png" style=" width:100px;" data-holder-rendered="true" />

                    </div>
                    <div class="col-sm-6 company-details">
                        <h2 class="name">
                            <a target="_blank" href="{{url('/')}}">
                            {{$setting->company_name}}
                            </a>
                        </h2>

                        <div>{{$setting->address}}</div>
                        <div>{{$setting->phone}}</div>
                        <div>{{$setting->email}}</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts" style="display:flex; justify-content:space-between;">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">{{$order->name}}</h2>
                        <div class="address">{{$order->address}}</div>
                        <div class="email"><a href="mailto:john@example.com">{{$order->email}}</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE {{$order->txn_id}}</h1>
                        <div class="date">Invoice Time: {{$order->created_at}}</div>
                        <div class="date">Reservation Time:
                            {{date("l, F d Y @ h:ia",strtotime($order->reservation_time))}}
                        </div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-left">DESCRIPTION</th>
                        <th class="text-right">TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td class="text-left"><strong>Fare :</strong></td>
                        <td class="total">${{number_format($order->fare,2)}}</td>
                    </tr>


                    <tr>
                        <td>1</td>
                        <td class="text-left"><strong>International Full Coverage Insurance :</strong></td>
                        <td class="total">${{$order->international_full_coverage_insurance}}</td>
                    </tr>


                    <tr>
                        <td>2</td>
                        <td class="text-left"><strong>Supplemental Liability Insurance :</strong></td>
                        <td class="total">${{$order->liability_insurance}}</td>
                    </tr>


                    <tr>
                        <td>3</td>
                        <td class="text-left"><strong>Property Damage Waiver  :</strong></td>
                        <td class="total">${{$order->property_damage_waiver}}</td>
                    </tr>



                    <tr>
                        <td>4</td>
                        <td class="text-left"><strong>Tire Protection  :</strong></td>
                        <td class="total">${{$order->tire_protection}}</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td class="text-left"><strong>Mechanical Break Down Insurance  :</strong></td>
                        <td class="total">${{$order->mechanical_breakdown_coverage}}</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td class="text-left"><strong>Prepaid Gas Credit  :</strong></td>
                        <td class="total">${{$order->gas_credit}}</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2">SUBTOTAL</td>
                        <td>${{number_format($order->total,2)}}</td>
                    </tr>
                    <tr>
                        <td colspan="2">DISCOUNT</td>
                        <td> - ${{number_format($order->discount,2)}}</td>
                    </tr>
                    <tr>
                        <td colspan="2">TAX</td>
                        <td>${{number_format($order->tax,2)}}</td>
                    </tr>
                    <tr>
                        <td colspan="2">GRAND TOTAL</td>
                        <td>${{number_format($order->grand_total,2)}}</td>
                    </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>


            <div class="text-center no-print" style="margin: 30px 0">
                <a href="#" class="print-invoice" id="print-invoice" onclick="window.print()">Print</a>
            </div>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
