<?php

namespace Laraveltimezones\Timezones;
 
use App\Http\Controllers\Controller;
use Carbon\Carbon;
 
class TimezonesController extends Controller
{
 
    // public function index($timezone)
    // {
    //     echo Carbon::now($timezone)->toDateTimeString();
    // }
 
 	public function index($timezone = NULL)
    {
    	$current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::time', compact('current_time'));
        // $time = ($timezone)
        //     ? Carbon::now(str_replace('-', '/', $timezone))
        //     : Carbon::now();
        // echo $time->toDateTimeString();
    }
}