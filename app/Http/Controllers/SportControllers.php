<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marzik;
use PhpParser\Node\Stmt\Return_;
use App\Models\Performer;
use App\Models\MrcInfo;
use App\Models\Timer;
use App\Models\Country;

class SportControllers extends Controller
{
    protected function chengIntToDubl($val){
            $val = (int)$val;
            return $val/pow(10,(int)strlen(strval($val)));
    }
    public function nermucum(Request $request){
        // $weightClassDoingCount = marzik::where('weightClass',44)->where('v1_summ',null)->get();
        // if(count($weightClassDoingCount) != 0){
        // }
        $weightClassFilter = $request->all();

         if(count($weightClassFilter) == 0){
        $marziks_44=marzik::where('weightClass',44)->get();
        $marziks_48=marzik::where('weightClass',48)->get();
        $marziks_52=marzik::where('weightClass',52)->get();
        $marziks_56=marzik::where('weightClass',56)->get();
        $marziks_60=marzik::where('weightClass',60)->get();
        $marziks_67=marzik::where('weightClass',67)->get();
        $marziks_75=marzik::where('weightClass',75)->get();
        $marziks_82=marzik::where('weightClass',82)->get();
        $marziks_90=marzik::where('weightClass',90)->get();
        $marziks_100=marzik::where('weightClass',100)->get();
        $marziks_101=marzik::where('weightClass',101)->get();
        $marziks_110=marzik::where('weightClass',110)->get();
        $marziks_125=marzik::where('weightClass',125)->get();
        $marziks_140=marzik::where('weightClass',140)->get();
        $marziks_141=marzik::where('weightClass',141)->get();
         } else {
             $weightClassFilter = $request->input('weightClassFilter');
             $weightClassFilterSumm=$request->input('weightClassFilterSumm');

             if($weightClassFilter == 44 && $weightClassFilterSumm =='v1_summ'){
                 $marziks_44=marzik::where('weightClass',44)->orderBy('v1_summ','asc')->get();
                 $marziks_48=marzik::where('weightClass',48)->get();
                 $marziks_52=marzik::where('weightClass',52)->get();
                 $marziks_56=marzik::where('weightClass',56)->get();
                 $marziks_60=marzik::where('weightClass',60)->get();
                 $marziks_67=marzik::where('weightClass',67)->get();
                 $marziks_75=marzik::where('weightClass',75)->get();
                 $marziks_82=marzik::where('weightClass',82)->get();
                 $marziks_90=marzik::where('weightClass',90)->get();
                 $marziks_100=marzik::where('weightClass',100)->get();
                 $marziks_101=marzik::where('weightClass',101)->get();
                 $marziks_110=marzik::where('weightClass',110)->get();
                 $marziks_125=marzik::where('weightClass',125)->get();
                 $marziks_140=marzik::where('weightClass',140)->get();
                 $marziks_141=marzik::where('weightClass',141)->get();
             }

             if($weightClassFilter == 44 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->orderBy('v2_summ','asc')->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 44 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->orderBy('v3_summ','asc')->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 44 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->orderBy('v4_summ','asc')->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 44 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->orderBy('v5_summ','asc')->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 44 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->orderBy('summ','desc')->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 48 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->orderBy('v1_summ','asc')->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 48 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->orderBy('v2_summ','asc')->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 48 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->orderBy('v3_summ','asc')->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 48 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->orderBy('v4_summ','asc')->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 48 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->orderBy('v5_summ','asc')->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 48 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->orderBy('summ','desc')->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 52 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->orderBy('v1_summ','asc')->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }


            if($weightClassFilter == 52 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->orderBy('v2_summ','asc')->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 52 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->orderBy('v3_summ','asc')->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }


            if($weightClassFilter == 52 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->orderBy('v4_summ','asc')->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 52 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->orderBy('v5_summ','asc')->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 52 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->orderBy('summ','desc')->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }


            if($weightClassFilter == 56 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->orderBy('v1_summ','asc')->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 56 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->orderBy('v2_summ','asc')->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 56 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->orderBy('v3_summ','asc')->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 56 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->orderBy('v4_summ','asc')->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 56 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->orderBy('v5_summ','asc')->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 56 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->orderBy('summ','desc')->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 60 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->orderBy('v1_summ','asc')->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 60 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->orderBy('v2_summ','asc')->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 60 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->orderBy('v3_summ','asc')->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 60 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->orderBy('v4_summ','asc')->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 60 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->orderBy('v5_summ','asc')->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 60 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->orderBy('summ','desc')->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }


            if($weightClassFilter == 67 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->orderBy('v1_summ','asc')->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 67 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->orderBy('v2_summ','asc')->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 67 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->orderBy('v3_summ','asc')->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 67 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->orderBy('v4_summ','asc')->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 67 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->orderBy('v5_summ','asc')->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 67 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->orderBy('summ','desc')->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 75 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->orderBy('v1_summ','asc')->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 75 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->orderBy('v2_summ','asc')->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 75 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->orderBy('v3_summ','asc')->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 75 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->orderBy('v4_summ','asc')->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 75 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->orderBy('v5_summ','asc')->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 75 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->orderBy('summ','desc')->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 82 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->orderBy('v1_summ','asc')->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 82 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->orderBy('v2_summ','asc')->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 82 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->orderBy('v3_summ','asc')->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 82 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->orderBy('v4_summ','asc')->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 82 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->orderBy('v5_summ','asc')->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 82 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->orderBy('summ','desc')->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 90 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->orderBy('v1_summ','asc')->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 90 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->orderBy('v2_summ','asc')->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 90 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->orderBy('v3_summ','asc')->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 90 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->orderBy('v4_summ','asc')->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 90 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->orderBy('v5_summ','asc')->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 90 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->orderBy('summ','desc')->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 100 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->orderBy('v1_summ','asc')->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 100 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->orderBy('v2_summ','asc')->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 100 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->orderBy('v3_summ','asc')->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 100 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->orderBy('v4_summ','asc')->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 100 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->orderBy('v5_summ','asc')->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 90 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->orderBy('summ','desc')->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }

            if($weightClassFilter == 101 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->orderBy('v1_summ','asc')->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 101 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->orderBy('v2_summ','asc')->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 101 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->orderBy('v3_summ','asc')->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 101 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->orderBy('v4_summ','asc')->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 101 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->orderBy('v5_summ','asc')->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();

            }
            if($weightClassFilter == 101 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->orderBy('summ','desc')->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();

            }
            if($weightClassFilter == 110 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->orderBy('v1_summ','asc')->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 110 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->orderBy('v2_summ','asc')->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 110 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->orderBy('v3_summ','asc')->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 110 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->orderBy('v4_summ','asc')->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 110 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->orderBy('v5_summ','asc')->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 110 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->orderBy('summ','desc')->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 125 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->orderBy('v1_summ','asc')->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 125 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->orderBy('v2_summ','asc')->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 125 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->orderBy('v3_summ','asc')->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 125 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->orderBy('v4_summ','asc')->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 125 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->orderBy('v5_summ','asc')->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();

            }
            if($weightClassFilter == 125 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->orderBy('summ','desc')->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->get();

            }
            if($weightClassFilter == 140 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->orderBy('v1_summ','asc')->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 140 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->orderBy('v2_summ','asc')->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 140 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->orderBy('v3_summ','asc')->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 140 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->orderBy('v4_summ','asc')->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 140 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->orderBy('v5_summ','asc')->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 140 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->orderBy('summ','desc')->get();
                $marziks_141=marzik::where('weightClass',141)->get();
            }
            if($weightClassFilter == 141 && $weightClassFilterSumm =='v1_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->orderBy('v1_summ','asc')->get();
            }
            if($weightClassFilter == 141 && $weightClassFilterSumm =='v2_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->orderBy('v2_summ','asc')->get();
            }
            if($weightClassFilter == 141 && $weightClassFilterSumm =='v3_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->orderBy('v3_summ','asc')->get();
            }
            if($weightClassFilter == 141 && $weightClassFilterSumm =='v4_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->orderBy('v4_summ','asc')->get();
            }
            if($weightClassFilter == 141 && $weightClassFilterSumm =='v5_summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->orderBy('v5_summ','asc')->get();
            }

            if($weightClassFilter == 141 && $weightClassFilterSumm =='summ'){
                $marziks_44=marzik::where('weightClass',44)->get();
                $marziks_48=marzik::where('weightClass',48)->get();
                $marziks_52=marzik::where('weightClass',52)->get();
                $marziks_56=marzik::where('weightClass',56)->get();
                $marziks_60=marzik::where('weightClass',60)->get();
                $marziks_67=marzik::where('weightClass',67)->get();
                $marziks_75=marzik::where('weightClass',75)->get();
                $marziks_82=marzik::where('weightClass',82)->get();
                $marziks_90=marzik::where('weightClass',90)->get();
                $marziks_100=marzik::where('weightClass',100)->get();
                $marziks_101=marzik::where('weightClass',101)->get();
                $marziks_110=marzik::where('weightClass',110)->get();
                $marziks_125=marzik::where('weightClass',125)->get();
                $marziks_140=marzik::where('weightClass',140)->get();
                $marziks_141=marzik::where('weightClass',141)->orderBy('summ','desc')->get();
            }

         }
        $allCountry = Country::all()->toArray();
         //dd($allCountry);

        $arr=['marziks_44'=>$marziks_44,
            'marziks_48'=>$marziks_48,
            'marziks_52'=>$marziks_52,
            'marziks_56'=>$marziks_56,
            'marziks_60'=>$marziks_60,
            'marziks_67'=>$marziks_67,
            'marziks_75'=>$marziks_75,
            'marziks_82'=>$marziks_82,
            'marziks_90'=>$marziks_90,
            'marziks_100'=>$marziks_100,
            'marziks_101'=>$marziks_101,
            'marziks_110'=>$marziks_110,
            'marziks_125'=>$marziks_125,
            'marziks_140'=>$marziks_140,
            'marziks_141'=>$marziks_141,
            'allCountry'=>$allCountry,
    ];
        return view('nermucum',$arr);

    }





    public function monitor2(){
        $marziks=marzik::all();
        $arr=['marziks'=>$marziks];
        return view('monitor2',$arr);

    }

    public function createMarzik(Request $request){


        $Name = $request->input('name');
        $lastName = $request->input('lastName');
        $coacհName=$request->input('coacհName');
        $weight = $request->input('weight');
        $weightClass = $request->input('weightClass');
        $imgName = $request->file('imgName');
        $country = $request->input('country');
        $city = $request->input('city');
        $team = $request->input('team');

        //dd($country.$city.$team);

        if($Name == "" || $lastName == "" ||  $coacհName == "" || $weight == "" || $weightClass == "" ||  $imgName =="" ){
            return back( );
           }

        marzik::create(['name'=>$Name,'lastName'=>$lastName,"performer"=>'','coacհName'=>$coacհName, 'weight'=>$weight,'weightClass'=>$weightClass,'imgName'=>$imgName->getClientOriginalName(),'country'=>$country,'city'=>$city,'team'=>$team]);
       $imgName->move('marzikimg',$imgName->getClientOriginalName());

       return back( );





    }
    public function updateMarzik(Request $request){

        $v1_1m=$request->input('v1_1m');
        $v1_2m=$request->input('v1_2m');
        $v1_3m=$request->input('v1_3m');
        $v1_record=$request->input('v1_record');
        $v2_1m=$request->input('v2_1m');
        $v2_2m=$request->input('v2_2m');
        $v2_3m=$request->input('v2_3m');
        $v2_record=$request->input('v2_record');
        $v3_1m=$request->input('v3_1m');
        $v3_2m=$request->input('v3_2m');
        $v3_3m=$request->input('v3_3m');
        $v3_record=$request->input('v3_record');
        $v4_1m=$request->input('v4_1m');
        $v4_2m=$request->input('v4_2m');
        $v4_3m=$request->input('v4_3m');
        $v4_record=$request->input('v4_record');
        $v5_1m=$request->input('v5_1m');
        $v5_2m=$request->input('v5_2m');
        $v5_3m=$request->input('v5_3m');
        $v5_record=$request->input('v5_record');

        $marzikId=$request->input('marzikId');

        //$v1_2m = $this->chengIntToDubl((float)$v1_2m);

        $update=marzik::find($marzikId);
        if($update->v1_1m==0 || $update->v1_1m=="" || $update->v1_1m==null){
            $update->v1_1m=$this->chengIntToDubl($v1_1m);
        }
        if($update->v1_2m==0 || $update->v1_2m=="" || $update->v1_2m==null){
            $update->v1_2m=$this->chengIntToDubl($v1_2m);
        }
        if($update->v1_3m==0 || $update->v1_3m=="" || $update->v1_3m==null){
            $update->v1_3m=$this->chengIntToDubl($v1_3m);
        }
        if($update->v1_record==0 || $update->v1_record=="" || $update->v1_record==null){
            $update->v1_record=$this->chengIntToDubl($v1_record);
        }
        if($update->v2_1m==0 || $update->v2_1m=="" || $update->v2_1m==null){
            $update->v2_1m=$this->chengIntToDubl($v2_1m);
        }
        if($update->v2_2m==0 || $update->v2_2m=="" || $update->v2_2m==null){
            $update->v2_2m=$this->chengIntToDubl($v2_2m);
        }
        if($update->v2_3m==0 || $update->v2_3m=="" || $update->v2_3m==null){
            $update->v2_3m=$this->chengIntToDubl($v2_3m);
        }
        if($update->v2_record==0 || $update->v2_record=="" || $update->v2_record==null){
            $update->v2_record=$this->chengIntToDubl($v2_record);
        }
        if($update->v3_1m==0 || $update->v3_1m=="" || $update->v3_1m==null){
            $update->v3_1m=$this->chengIntToDubl($v3_1m);
        }
        if($update->v3_2m==0 || $update->v3_2m=="" || $update->v3_2m==null){
            $update->v3_2m=$this->chengIntToDubl($v3_2m);
        }
        if($update->v3_3m==0 || $update->v3_3m=="" || $update->v3_3m==null){
            $update->v3_3m=$this->chengIntToDubl($v3_3m);
        }
        if($update->v3_record==0 || $update->v3_record=="" || $update->v3_record==null){
            $update->v3_record=$this->chengIntToDubl($v3_record);
        }
        if($update->v4_1m==0 || $update->v4_1m=="" || $update->v4_1m==null){
            $update->v4_1m=$this->chengIntToDubl($v4_1m);
        }
        if($update->v4_2m==0 || $update->v4_2m=="" || $update->v4_2m==null){
            $update->v4_2m=$this->chengIntToDubl($v4_2m);
        }
        if($update->v4_3m==0 || $update->v4_3m=="" || $update->v4_3m==null){
            $update->v4_3m=$this->chengIntToDubl($v4_3m);
        }
        if($update->v4_record==0 || $update->v4_record=="" || $update->v4_record==null){
            $update->v4_record=$this->chengIntToDubl($v4_record);
        }
        if($update->v5_1m==0 || $update->v5_1m=="" || $update->v5_1m==null){
            $update->v5_1m=$this->chengIntToDubl($v5_1m);
        }
        if($update->v5_2m==0 || $update->v5_2m=="" || $update->v5_2m==null){
            $update->v5_2m=$this->chengIntToDubl($v5_2m);
        }
        if($update->v5_3m==0 || $update->v5_3m=="" || $update->v5_3m==null){
            $update->v5_3m=$this->chengIntToDubl($v5_3m);
        }
        if($update->v5_record==0 || $update->v5_record=="" || $update->v5_record==null){
            $update->v5_record=$this->chengIntToDubl($v5_record);
        }

        $update->save();

        $marzik = marzik::find($marzikId);
        $varjut1 = 0;
        if($marzik->v1_1m){
            if($marzik->v1_1m>$varjut1){
                $varjut1=$marzik->v1_1m;
            }
        }
        if($marzik->v1_2m){
            if($marzik->v1_2m>$varjut1){
                $varjut1=$marzik->v1_2m;
            }
        }
        if($marzik->v1_3m){
            if($marzik->v1_3m>$varjut1){
                $varjut1=$marzik->v1_3m;
            }
        }
        $marzik->v1_summ = $varjut1;
        $marzik->save();
        $varjut2 = 0;
        if($marzik->v2_1m){
            if($marzik->v2_1m>$varjut2){
                $varjut2=$marzik->v2_1m;
            }
        }
        if($marzik->v2_2m){
            if($marzik->v2_2m>$varjut2){
                $varjut2=$marzik->v2_2m;
            }
        }
        if($marzik->v2_3m){
            if($marzik->v2_3m>$varjut2){
                $varjut2=$marzik->v2_3m;
            }
        }
        $marzik->v2_summ = $varjut2;
        $marzik->save();
        $varjut3 = 0;
        if($marzik->v3_1m){
            if($marzik->v3_1m>$varjut3){
                $varjut3=$marzik->v3_1m;
            }
        }
        if($marzik->v3_2m){
            if($marzik->v3_2m>$varjut3){
                $varjut3=$marzik->v3_2m;
            }
        }
        if($marzik->v3_3m){
            if($marzik->v3_3m>$varjut3){
                $varjut3=$marzik->v3_3m;
            }
        }
        $marzik->v3_summ = $varjut3;
        $marzik->save();


        $varjut4 = 0;
        if($marzik->v4_1m){
            if($marzik->v4_1m>$varjut4){
                $varjut4=$marzik->v4_1m;
            }
        }
        if($marzik->v4_2m){
            if($marzik->v4_2m>$varjut4){
                $varjut4=$marzik->v4_2m;
            }
        }
        if($marzik->v4_3m){
            if($marzik->v4_3m>$varjut4){
                $varjut4=$marzik->v4_3m;
            }
        }
        $marzik->v4_summ = $varjut4;
        $marzik->save();


        $varjut5 = 0;
        if($marzik->v5_1m){
            if($marzik->v5_1m>$varjut5){
                $varjut5=$marzik->v5_1m;
            }
        }
        if($marzik->v5_2m){
            if($marzik->v5_2m>$varjut5){
                $varjut5=$marzik->v5_2m;
            }
        }
        if($marzik->v5_3m){
            if($marzik->v5_3m>$varjut5){
                $varjut5=$marzik->v5_3m;
            }
        }
        $marzik->v5_summ = $varjut5;
        $marzik->save();


        if($varjut1<0){
            $varjut1 = 0;
        }
        if($varjut2<0){
            $varjut2 = 0;
        }
        if($varjut3<0){
            $varjut3 = 0;
        }
        if($varjut4<0){
            $varjut4 = 0;
        }
        if($varjut5<0){
            $varjut5 = 0;
        }

        $varjsumm=$varjut1+$varjut2+$varjut3+$varjut4+$varjut5;
        $marzik->summ=$varjsumm;
        $marzik->save();

        return back();


    }

    public function deleteMarzik($id){
     $marzik = marzik::find($id);
     $imgName= $marzik->imgName;

     marzik::destroy($id);
     return back();

    }


    public function mrcavar1(){
     return view('mrcavar1');
    }
    public function mrcavar2(){
        return view('mrcavar2');
       }
       public function mrcavarglx(){
        return view('mrcavarglx');
       }

    public function katarox(Request $request){
        $kataroxId = $request->input('kataroxId');

        $marzik = marzik::all();
        foreach($marzik as $val){
            $val->performer = false;
            $val->save();
        }

        $marzik = marzik::find($kataroxId);
        $marzik->performer = true;

        $marzik->save();

        $katarvoxQash = 0;
        $marzik = marzik::find($kataroxId)->toArray();
        if($marzik['v1_1m'] > 0 && $marzik['v1_1m']<1){
            $nofiltrVal = $marzik['v1_1m'] * pow(10,strlen(strval($marzik['v1_1m']))-1);
            if(strlen(strval($nofiltrVal))>3){
                $nofiltrVal = $nofiltrVal/10;
            }
            $katarvoxQash = $nofiltrVal;
        }

        $performer = Performer::find(1);
        $performer->performer = $kataroxId;
        $performer->karatvoxQash = $katarvoxQash;
        $performer->save();

        for($i=1;$i<4;$i++){
            $update = MrcInfo::find($i);
            $update->mrcColor = "chnshvac";
            $update->save();
        }




        return back();

    }
    public function monitor(){
        $marzikInfo = marzik::where('performer',1)->first();
        $parformer = Performer::first();
        $mrcavar1 = MrcInfo::where('id',1)->first();
        $mrcavar2 = MrcInfo::where('id',2)->first();
        $mrcavarGlx = MrcInfo::where('id',3)->first();

         $timer = Timer::where('id',1)->first()->timer;

        $arr = ['marzikInfo'=>$marzikInfo,
        'parformer'=>$parformer,
        'mrcavar1' => $mrcavar1->mrcColor,
        'mrcavar2' => $mrcavar2->mrcColor,
        'mrcavarGlx' => $mrcavarGlx->mrcColor,
        'timer' => $timer,
    ];

         return view('monitor',$arr);

    }

    public function chackMrcavar(Request $request){
      $mrcId = $request->input('mrcavarId');
      $mrcColor = $request->input('mrcguyn');

        $update = MrcInfo::find($mrcId);
        $update->mrcColor = $mrcColor;
        $update->save();

        $performerInfo = Performer::first();

        $arrMrcInfo = MrcInfo::all();

        $greenCount = 0;
        $colorCount = 0;
        foreach($arrMrcInfo as $val){
            if($val->mrcColor == "green"){
                $greenCount++;
                $colorCount++;
            } else if($val->mrcColor != null){
                $colorCount++;
            }
        }

            $kataroxMarzik = marzik::find($performerInfo->performer);
            $marzadzev = $performerInfo->marzadzev;
            $motecum = $performerInfo->motecum;
            $varjadzev = '';
            $motec = '';
            switch ($marzadzev){
                case "1m": $varjadzev = "v1_";break;
                case "2m": $varjadzev = "v2_";break;
                case "3m": $varjadzev = "v3_";break;
                case "4m": $varjadzev = "v4_";break;
                case "5m": $varjadzev = "v5_";
            }
            switch ($motecum){
                case 1: $motec = "1m";break;
                case 2: $motec = "2m";break;
                case 3: $motec = "3m";
            }

        if($greenCount >= 2) {
            if ($colorCount == 3) {
                $update = Timer::find(1);
                $update->timer = 5;
                $update->save();
            }
            $activeFilde = $varjadzev.$motec;
            $update = marzik::find($performerInfo->performer);
            $update->$activeFilde = $performerInfo->karatvoxQash;
            $update->save();
        } else {
            $activeFilde = $varjadzev.$motec;
            $update = marzik::find($performerInfo->performer);
            $update->$activeFilde = -1*$performerInfo->karatvoxQash;
            $update->save();
        }


    return back();

    }

    public function updateTimer(Request $request){
        $time = $request->input('timer');

        $update = Timer::find(1);
        $update->timer = $time;
        $update->save();

        return back();
    }





}

?>
