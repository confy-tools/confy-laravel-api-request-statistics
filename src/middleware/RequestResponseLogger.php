<?php

namespace Confyans\RequestStatistics\Middleware\RequestStatistics;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RequestResponseLogger
{
    public $startTime;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        $this->startTime = $this->microtimeFloat(true);
        return $next($request);
    }
 

    /**
     * Simple function to replicate PHP 5 behaviour
     */
    public function microtimeFloat()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec)* 0.0000000001;
    }

    public function terminate($request, $response)
    {      
   
        $duration = $this->microtimeFloat() - $this->startTime;        
        $data = [               
                'route' => $request->path(),
                'route_details' => json_encode(app()->router->getCurrentRoute()),
                'url' => $request->fullUrl(),
                'header' => json_encode(app('request')->header()),
                'request_payload' => json_encode($request->all()),
                'server' => json_encode($request->server()),
                'response' => json_encode($response),
                'duration' => $duration,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];  
        if($request->wantsJson()){
            $data['type']='api';
        }else{
            $data['type']='http';
        }
        DB::table('request_statistics')->insert($data);
    }
}