<?php

namespace App\Http\Controllers;

use App\Area;
use App\Booking;
use App\City;
use App\Services;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $areas = Area::where('city_id', 1)->get();
        $constructors = User::where('area_id', 1)->get();
        $services = Services::where('user_id', 4)->get();
        return view('customer.index', compact('cities', 'areas', 'constructors', 'services'));
    }

    public function getAreas()
    {
        if (request()->ajax()) {
            $areas = Area::where('city_id', request()->get('city'))->pluck('id', 'name');
            return response()->json($areas);
        }
    }

    public function getConstructor()
    {
        if (request()->ajax()) {
            $users = User::where('area_id', request()->get('area_id'))
                ->where('role', 2)
                ->pluck('id', 'name');
            return response()->json($users);
        }
    }

    public function getServices()
    {
        if (request()->ajax()) {
            $users = User::find(request()->get('constructor_id'));
            $data = '';
            foreach ($users->services as $service) {
                $data .= '<div class="form-check form-check-inline" >';
                $data .= '<input class="form-check-input" name="services[]" type="checkbox" id="inline' . $service->id . '" value="' . $service->id . '" >';
                $data .= '<label class="form-check-label" for="inline' . $service->id . '" >' . $service->service_name . '(' . $service->price . ')</label >';
                $data .= '</div >';
            }
            return response()->json($data);
        }
    }

    public function store()
    {

        $data = [
            'customer_id' => auth()->user()->id,
            'constructor_id' => request()->input('constructors'),
            'service_id' => implode(",",request()->input('services'))
        ];
        Booking::create($data);


        /*$services =  request()->input('services');
        if(count($services)){
            foreach($services as $service){
                $data = [
                    'customer_id' => auth()->user()->id,
                    'constructor_id' => request()->input('constructors'),
                    'service_id' => $service,
                ];
                Booking::create($data);
            }
        }*/
        return redirect()->back()->with('status', 'Booking has been saved');

    }


}
