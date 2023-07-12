<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imageForColorDefinition;
use App\Models\imageForDiseasePrediction;
use App\Models\Appointment;

class ServicesController extends Controller
{
    public function colorRecognition_uploadImage(Request $req)
    {
        // var_dump($req->uploadFile);
        $imageName = time().'.'.$req->uploadFile->extension();
        $req->uploadFile->move(public_path('images'), $imageName);
        // var_dump($imageName);
        imageForColorDefinition::create(['uid'=>session('uid'), 'imagePath'=> $imageName]);

        return view('resultOf_colorRecognition_uploadImage', ['imageName'=>$imageName]);
    }
    



    public function eyeDisaesesDiagnosis(Request $req){
        // var_dump($req->uploadFile);
        $imageName = time().'.'.$req->uploadFile->extension();
        $req->uploadFile->move(public_path('images'), $imageName);
        // var_dump($imageName);
        imageForDiseasePrediction::create(['uid'=>session('uid'), 'imagePath'=> $imageName]);

        return view('resultOf_eyeDisaesesDiagnosis');
    }

    public function appointment(Request $req){
        // echo "AAAAAAAAAA";
        $validated = $req->validate([
            // 'appointmentDate' => 'before_or_equal:today',
            'date' => 'required|date|date_format:Y-m-d|after_or_equal:today'
        ]);
        Appointment::create(['uid'=>session('uid'), 'name'=>$req->name, 'gender'=> $req->gender,
                            'appointmentDate'=>$req->date,'paymentMethod'=>$req->payment,
                            'cardNum'=>$req->cardNumber,'service'=>$req->service]);
                            

        return view('ThankAppointment',['name'=>$req->name, 'gender'=> $req->gender,'appointmentDate'=>$req->date,
                    'paymentMethod'=>$req->payment, 'cardNum'=>$req->cardNumber,'service'=>$req->service]);
    }
}
