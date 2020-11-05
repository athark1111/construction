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
        /* $areas = Area::where('city_id', 1)->get();
         $constructors = User::where('area_id', 1)->get();
         $services = Services::where('user_id', 4)->get();*/

        $areas = Area::where('city_id', 1)->get();
        $constructors = User::all();
        $services = Services::all();
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
                ->where('role', 2)->get();
            $con = '';
            foreach ($users as $user) {
                $con .= '<a href="' . route('show.services', $user->id) . '" class="list-group-item list-group-item-action">' . $user->name . '</a>';
            }
            return response()->json($con);
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

    public function showServices(User $contractor)
    {
        return view('customer.show', compact('contractor'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'services' => 'required'
        ],['services.required' => 'Please select atleast one service']);

        $data = [
            'customer_id' => auth()->user()->id,
            'constructor_id' => request()->input('constructor_id'),
            'service_id' => implode(",", request()->input('services'))
        ];
        Booking::create($data);
        return redirect()->route('customer')->with('status', 'Booking has been saved');


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


    }


    public function showProfile()
    {
        $constructor    = User::where('id',auth()->user()->id)->first();
        $cities         = City::all();
        $areas          = Area::all();
        return view('customer.profile',compact('constructor','cities','areas'));
    }

    public function updateProfile($id)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
            'area_id' => 'required',
        ]);
        $user = User::find($id);
        $user->update($data);
        return redirect()->back()->with('message','Profile Updated');
    }

}
