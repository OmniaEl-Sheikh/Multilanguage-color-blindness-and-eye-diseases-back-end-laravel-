<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable=['uid','name','gender','report', 'gender', 'appointmentDate','paymentMethod','cardNum'];
    public $timestamps= false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
