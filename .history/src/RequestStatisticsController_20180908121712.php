<?php

namespace Confyans\RequestStatistics;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RequestStatisticsController extends Controller
{
    //
    public function dashboard(){       
        return view('confyans::dashboard');
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}