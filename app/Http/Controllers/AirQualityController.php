<?php

namespace App\Http\Controllers;

use App\Models\AirQuality;
use Illuminate\Http\Request;

class AirQualityController extends Controller
{
    //

    public function create(Request $request){
     $airquality=new AirQuality();
     $airquality->co=$request->input('co');
     $airquality->co2=$request->input('co2');
     $airquality->nh3=$request->input('nh3');
     $airquality->no2=$request->input('no2');
     $airquality->o2=$request->input('o2');
     $airquality->pm10=$request->input('pm10');
     $airquality->pm2=$request->input('pm2');

     $airquality->save();
     return response()->json($airquality);

    }
}
