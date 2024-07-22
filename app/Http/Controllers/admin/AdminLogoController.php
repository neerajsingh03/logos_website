<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;

class AdminLogoController extends Controller
{
    public function logoRequest()
    {
        $logos = Logo::where('is_approved', '=', false)->where('is_disapproved', '=', false)->get();
        // $logos = Logo::where([ ['is_approved', '=', false],['is_disapproved', '=', false] ])->get();
        // if ($logos->isEmpty()) {
        //     Alert::success('all done', 'You dont have any request ')->persistent(true, true);
        //     return redirect()->back();
        // }
        return view('admin.logo.logo_request', compact('logos'));
    }
    //*********************Logo Approved By Admin ******************/
    public function logoApprove(Request $request)
    {

        $id = $request->input('id');

        $logo = Logo::find($id);
        $logo->update(['is_approved' => true, 'is_disapproved' => false]);
        return redirect()->back()->with('msg', ' your product has been approved by admin');
    }
    public function logoDisapprove(Request $request)
    {

        $id = $request->input('id');

        $logo = Logo::find($id);
        $logo->update(['is_approved' => false, 'is_disapproved' => true]);
        return redirect()->back()->with('msg', ' your product has been Disapproved by admin');
    }

    public function approvedLogo()
    {
        $logos = Logo::where('is_approved', '=', true)->where('is_disapproved', '=', false)->get();

        return view('admin.logo.logo_approvel', compact('logos'));
    }

    public function disapprovedLogo()
    {
        $logos = Logo::where('is_disapproved', '=', true)->where('is_approved', '=', false)->get();

        return view('admin.logo.logo_disapprovel', compact('logos'));
    }
    public function changepassword()
    {
        return view('admin.settings.change_password');
    }
    public function changePassProcc(Request $request)
    {
        dd($request->all());
    }

  
}
