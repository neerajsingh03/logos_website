<?php

namespace App\Http\Controllers\Auth;

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Jobs\SendEmailJob;
use App\Listeners\SendEmailConfirm;
use App\Events\SendEmail;
use Illuminate\Support\Facades\App;
class AuthController extends Controller
{   
    public function loginPage(Request $request)
    {   
    //   dd($request->all());
        // dd($request->redirect_url);
        $redirectUrl = $request->redirect_url;
       session()->put('redirect',$redirectUrl);
       
        if (auth()->user()) {
            return redirect('/');
        } else {
            return view('form.login');
        }
    }
    public function loginProcess(Request $request)
    {
     
        // dd($request->all());
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        //*****************LoginProcess****************//

        if (Auth::attempt($request->only('email', 'password'))) {
            
           
           
            if (Auth()->user()->role === 'designer') {
                return redirect('designer-dashboard');
            } elseif (Auth()->user()->role === 'admin') {
                return redirect('admin-dashboard');
            }
            if (session()->has('redirect')) {
                $redirectUrl = session()->get('redirect');
                // dd( $redirectUrl);
                return redirect()->away($redirectUrl);
            } else {
                return redirect('/');
            }
            if (Auth()->user()->role === 'user') {
                return redirect('/');
            }
            
        }
        $lng = App::setLocale('en');
       
        return redirect($lng.'/login')->withError(__('lang.login_invalid'));
    }

    public function registrationPage()
    {
     
        return view('form.register');
    }
    public function registrationProcess(Request $request)
    {
   
        // ********************Registration Data Validate *******************//

        $request->validate([
            'name' => 'required|',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'number' => 'required|unique:users|min:10',
            'role' => 'required',
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = $request->role;
        $data->number = $request->number;

        if ($request->role === 'user') {       // role user
            $data->role = 'user';
            $data->is_approved = true;
            $data->is_disapproved = false;
        } else if ($request->role === 'designer') {      // role designer
            $data->role = 'designer';
            $data->is_approved = true;
            $data->is_disapproved = false;
        }
        else if ($request->role === 'admin') {      // role designer
            $data->role = 'admin';
            $data->is_approved = true;
            $data->is_disapproved = false;
        }

        // Mail::to($data->email)->send(new WelcomeEmail($data));  // send mail after user registration successfully
        $data->save();

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth()->user()->role === 'designer') {
                return redirect('designer-dashboard');
            } elseif (Auth()->user()->role === 'admin') {
                return redirect('admin-dashboard');
            } elseif (Auth()->user()->role === 'user') {
                return redirect('/');
            }
        }
        
        else {
            return 'Authentication failed';
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    // public function index()   //this code execute events and listeners
    // {
    //     $data = [];
    //     $users = User::all();
    //     foreach ($users as $user) {
    //         $data['name'] = $user->name;
    //         $data['email'] = $user->email;
    //         $data['role']  = $user->role;
    //         event(new SendEmail($data));
    //     }
    // }
    // public function index()
    // {
    //     event(new SendEmail('how are you'));
    // }
}