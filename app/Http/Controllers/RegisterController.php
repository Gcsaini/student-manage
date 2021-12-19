<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\Users;
use Mail;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function insert(Request $req){
        
        $this->validate($req,[
            'name'=>'required | min:6',
            'email'=>'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(8)
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()
            ],
            ['name.required'=>'Please enter your name',
              'email.required'=>'please enter your email',
              'password.required'=>'Please enter password'

            ]

        ]);
        
        $rand_id = rand('111111111','999999999');
        $model = new Users();
        $model->name= $req->name;
        $model->email=$req->email;
        $model->password=Crypt::encrypt($req->password);
        $model->status=1;
        $model->is_verify=0;
        $model->rand_id=$rand_id;
        $model->created_at=date('Y-m-d h:i:s');
        $model->updated_at=date('Y-m-d h:i:s');
        $result= $model->save();
        if($result){
            $data = ['name'=>$req->name,'rand_id'=>$rand_id];
            $user['to'] = $req->email;
            Mail::send('user_mail',$data,function($messages) use($user){
                $messages->to($user['to']);
                $messages->subject('Email id verification');
            });
            $req->session()->flash('success','Registration success! Please check your email to verify your id');
            return redirect('register');

        }else{
            $req->session()->flash('error','Something went wrong please try again');
            return redirect('register');
        }
      
      
        
    }
}