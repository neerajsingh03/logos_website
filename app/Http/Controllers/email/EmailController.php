<?php

namespace App\Http\Controllers\email;

use App\Events\SendEmail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    public function emailPage()
    {
        return view('user.email.email-form');
    }
    public function emailProcess(Request $request)
    {
        $title = $request->input('title');
        $message = $request->input('message');
        $users = User::all();
       
        $data = [];
        foreach ($users as $user) {
            $data['name'] = $user->name;
            $data['email'] = $user->email;
            $data['title'] = $title;
            $data['message'] = $message;
            dispatch(new SendEmailJob($data));
        }
        return redirect('/email-page')->with('success','Queue Job send successfully');
    }

    public function pusherNotifyPage()
    {
        return view('user.email.pusher-form');
    }
    public function pusherNotifyProcess(Request $request)
    {

        $title = $request->input('title');
        $message = $request->input('message');
        $data = [
            $data['title'] = $title,
            $data['message'] = $message
        ];
        event(new SendEmail($data));
        return redirect()->back();
    }
}
