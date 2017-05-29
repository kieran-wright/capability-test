<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Location;


class LocationsController extends Controller
{
    public function index()
    {
    	$locations = Location::get();

    	foreach ($locations as $location) {
    		$location->time = Carbon::now($location->timezone);
    	}

    	return view('welcome', ['locations' => $locations]);
    }
}
