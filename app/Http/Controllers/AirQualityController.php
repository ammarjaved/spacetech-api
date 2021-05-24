<?php

namespace App\Http\Controllers;

use App\Models\AirQuality;
use Illuminate\Http\Request;

class AirQualityController extends Controller
{
    //

    public function create(Request $request){
     $airquality=new AirQuality();
     $airquality->loc=$request->input('loc');
     $airquality->co=$request->input('co');
     $airquality->no2=$request->input('no2');
     $airquality->nh3=$request->input('nh3');
     $airquality->co2=$request->input('co2');
     $airquality->voc=$request->input('voc');
     $airquality->pm1=$request->input('pm1');
     $airquality->pm2=$request->input('pm2');
     $airquality->pm3=$request->input('pm3');
     $airquality->pm4=$request->input('pm4');
     $airquality->pm5=$request->input('pm5');
     $airquality->pm6=$request->input('pm6');
     $airquality->pm7=$request->input('pm7');




     $airquality->save();
     return response()->json($airquality);

    }
}
