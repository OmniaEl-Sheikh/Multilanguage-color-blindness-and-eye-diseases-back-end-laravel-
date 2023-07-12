<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageForColorDefinition extends Model
{
    use HasFactory;

    protected $fillable=(['uid','imagePath','colorName','degree']);
    public $timestamps= false;


    public function user(){
        return $this->belongsTo(User::class);
    }
}
