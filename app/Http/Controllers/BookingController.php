<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use SebastianBergmann\Comparator\Book;

class BookingController extends Controller
{
    public function booking()
    {
        $bookings = Booking::where('constructor_id',auth()->user()->id)->paginate(10);
        return view('contractor.bookings',compact('bookings'));
    }
}
