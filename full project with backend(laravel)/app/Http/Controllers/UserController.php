<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use App\Http\Controllers\Validator;

class UserController extends Controller
{
    public function signup(Request $req)
    {
        
        $flag=0;  // (1) Unique email
        foreach( User::all() as $record)
        {
            if($req->email == $record->email)
                $flag=1;
        }

        if($flag==0) 
        {
        if($req->password == $req->password_confirmation)  // (2) password confirmation
        {
            $obj=User::create(['firstName'=>$req->fname , 'lastName'=>$req->lname,
                    'password'=>$req->password , 'email'=> $req->email]);
            session(['loggedIn'=>true, 'uid'=>$obj->id]);
            return redirect('/#services');
        }
        else
        {
            session(['loggedIn'=>false]);
            return redirect('/viewSL')->with(['message'=> "Passwords does not match"])->withInput();
        }
        }
        else
        {
            session(['loggedIn'=>false]);
            session(['gender'=>$req->gender]);
            return redirect('/viewSL')->with(['message'=> "This email already exists"])->withInput();
        }
        
        

    }

    public function login(Request $req)
    {
        foreach( User::all() as $record)
        {
            if($req->email == $record->email)
                if($req->password == $record->password)
                {
                    session(['loggedIn'=>true, 'uid'=>$record->id]);
                    return redirect('/#services');
                }
        }
        session(['loggedIn'=>false]);
        return redirect('/viewSL')->with(['message'=> "Invalid login"]);
    }
    public function resultOf_eyeDisaesesDiagnosis(){
        return view('resultOf_eyeDisaesesDiagnosis');
    }

    public function eyedetect(Request $request){

            
        $request->validate([
            'file' => 'required'
        ]);
        
        $image = $request->file('file');
            // Rest of the code
            $imageName=time(). '.' .$image->extension();
            $image->move(public_path('eyeimg'),$imageName);
    
            //E:\courses\backend\larvel\laravel\A\expert_system_test\fisha\public
    
            //E:\courses\backend\larvel\laravel\A\expert_system_test\fisha\public\radiology_images
            $newimgName="C:/Users/IT/Desktop/color blindness and eye diseases graduate/graduateLaravel/graduate/public/eyeimg/{$imageName}";
            //Model
            $url = 'http://127.0.0.1:9000/predict';
            //path same name in python function
            $data =["path" => $newimgName];
            $options = ['http'=> ['header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST','content' => http_build_query($data)]
            ] ;
            $context = stream_context_create($options);
            $result = file_get_contents($url,false,$context);
            $result = json_decode($result , true);

            session()->regenerate();
                session([
                'RadiologyResult' => true,
                'class_name1' => $result['class_name1'],
                'class_name2' => $result['class_name2'],
                'y_pred' => $result['y_pred']
            ]);
            
            return  redirect('/resultOf_eyeDisaesesDiagnosis')->with(['RadiologyResult']);

}
}

