<?php

namespace App\Http\Controllers;

use App\GiftCard;
use Illuminate\Http\Request;

class GiftCardHistoryController extends Controller
{

    public function history(){

        $records = GiftCard::where('transaction_type','incoming')->where('flag','gift_card_purchase')->get();


        return view('admin.gift-card-history.index',compact('records'));

    }
}
