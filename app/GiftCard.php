<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class GiftCard extends Model
{
    //



    public static function balance($user_id = null){

        //return 0;
        if(!$user_id){
            $user_id = Auth::id();
        }
        $totalCreadit  = GiftCard::where('transaction_type','incoming')->where('user_id',$user_id)
            ->where('status','confirmed')->sum('amount');
        $totalDebit  = GiftCard::where('transaction_type','outgoing')->where('user_id',$user_id)
            ->sum('amount');

        $balance = $totalCreadit-$totalDebit;
        return $balance;
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function package(){
        return $this->belongsTo('App\GiftCardPackage','package_id');
    }
}
