<?php

namespace App\Http\Controllers\Designer;

use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignerDashboardController extends Controller
{
    public function designerDashboard()
    {
        return view('designer.dashboard.index');
    }
}
