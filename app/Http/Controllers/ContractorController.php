<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Services;
use Illuminate\Http\Request;

class ContractorController extends Controller
{
    public function index()
    {
    	$arr = Auth::User();
        return view('contractor.index')->with('arr',$arr);
    }

    public function create()
    {
        return view('contractor.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'service_name' => 'required',
            'price' => 'required',
        ]);
        auth()->user()->services()->create($data);
        return redirect()->route('contractor.index')->with('message', 'Service Added');
    }

    public function edit($id)
    {
        $service = Services::find($id);
        return view('contractor.edit',compact('service'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'service_name' => 'required',
            'price' => 'required',
        ]);
        $service = Services::find($id);
        $service->update($data);
        return redirect()->route('contractor.index')->with('message', 'Service Updated Successfully');

    }

    public function destroy($id)
    {
        $service = Services::find($id);
        $service->delete();
        return redirect()->route('contractor.index')->with('message', 'Service Deleted Successfully');
    }

    public function showProfile()
    {
        $constructor = User::where('id',auth()->user()->id)->first();
        return view('contractor.profile',compact('constructor'));
    }

    public function updateProfile($id)
    {
        dd($id);
    }


}
