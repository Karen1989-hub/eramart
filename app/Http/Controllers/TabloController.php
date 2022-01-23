<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Performer;
use App\Models\marzik;
use App\Models\Timer;


class TabloController extends Controller
{
   public function updateTablo(Request $request){
       $karatvoxQash=$request->input('katarvoxQash');
       $marzadzev = $request->input('katarvoxMarzadzev');
       $motecum = $request->input('motecum');

       $marzikId = marzik::select('id')->where('performer',1)->first();

       $update = Performer::find(1);
       $update->performer = $marzikId->id;
       $update->karatvoxQash = $karatvoxQash;
       $update->marzadzev = $marzadzev;
       $update->motecum = $motecum;
       $update->save();

       return back();
   }

   public function stopTimer(Request $request){
        $stopTime = $request->input('stopTime');
        $update = Timer::find(1);
        $update->timer=$stopTime;
        $update->save();

        return back();

   }
}
