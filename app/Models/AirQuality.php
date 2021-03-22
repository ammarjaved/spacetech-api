<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AirQuality extends Model
{
   // use HasFactory;
    use Notifiable;
    protected $table='air_quality';
    protected $fillable=['co', 'co2', 'nh3', 'no2', 'o2', 'pm10', 'pm2'];

}
