<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable=['firstName','lastName','email','password', 'gender', 'birthDate'];
    protected $hidden=['password'];
    public $timestamps= false;

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function imageForColorDefinitions(){
        return $this->hasMany(Appointment::class);
    }

    public function image_for_disease_predictions(){
        return $this->hasMany(Appointment::class);
    }


    public function contacts(){
        return $this->hasMany(Contact::class);
    }
}
