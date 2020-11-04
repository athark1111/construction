<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $areas = Area::where('city_id', 1)->get();
        return view('customer.index', compact('cities', 'areas'));
    }

    public function getAreas()
    {
        if (request()->ajax()) {
            $areas = Area::where('city_id', request()->get('city'))->pluck('id','name');
            return response()->json($areas);
        }
    }
}
