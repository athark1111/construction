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
}
