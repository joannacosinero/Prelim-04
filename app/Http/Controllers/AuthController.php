<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function registrationForm(){
        return view ('register');
    }


    public function loginForm(){
        return view ('login');
    }

    public function land(){
        return view ('land');
    }

    public function dashboard(){
        return view ('dashboard');
    }

    public function register (Request $request){
        $request->validate([
            'name'  =>  'required|string',
            'pnumber'  =>  'required|string',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'pnumber' => $request->pnumber,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);


        Mail::send('verification-email', ['user'=>$user], function($mail) use ($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
            $mail->from('joannalustre26@gmail.com', 'BHL Vaccine');
        });

        Nexmo::message()->send([
            'to'=>($request->pnumber),
            'from'=>'sender',
            'text'=>'The verfication has been sent to your email. Please check it right away.'
        ]);

        return redirect ('/login')->with('Message', 'Your account has been created. Please check your email for verification.');
    }

    public function login (Request $request){
        $request->validate([
            'email' => 'email | required',
            'password' => 'string | required',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || $user -> email_verified_at == null){
            return redirect('/login')->with('Error', 'Sorry, you are not yet verified.');
        }
 
        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$login){
            return back()->with('Error', 'Invalid Credentials');
        }

        return redirect ('/dashboard');
    }

    public function verification (User $user, $token){
        if($user->remember_token!==$token) {
            return redirect('/login')->with('Error', 'Invalid token.');
        }
        
        $user->email_verified_at = now();
        $user->save();

        return redirect('/login')->with('Message', 'Your account has been verified. You can now login. ');
    }


}
