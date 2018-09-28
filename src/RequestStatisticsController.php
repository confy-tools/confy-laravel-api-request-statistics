<?php

namespace Confyans\RequestStatistics;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RequestStatisticsController extends Controller
{
    //
    public function dashboard()
    {

        $result = null;
        // return view('confyans::dashboard', compact('result'));
    }
    /**
     * @function apiTrack
     * apiTrack
     *
     * @param
     * @return
     *
     * @author
     * Sanith
     */
    public function apiTrackAction()
    {
        $id = trim(Input::get('id'));
        $auto = Input::get('auto');
        $call = Input::get('call');
        $api = null;
        $page = null;
        if ($id != '') {
            $api = DB::table('request_statistics')
                ->where('id', $id)
                ->paginate(25);
            $page = 'single';
        } else {
            $api = DB::table('request_statistics')
                ->orderBy('id', 'desc')
                ->where(function ($sql) use ($api) {
                    if ($api != '') {
                        $sql->where('url', 'like', '%' . $api . '%');
                    }
                })
                ->paginate(25);
            $page = 'list';
        }
        return view('confyans::dashboard')->with('api', $api)->with('page', $page)->with('auto', $auto);
    }
    public function subtract($a, $b)
    {
        echo $a - $b;
    }
}
