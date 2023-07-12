<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageForDiseasePrediction extends Model
{
    use HasFactory;


    protected $fillable=(['uid','imagePath','result']);
    public $timestamps= false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
