<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use SebastianBergmann\Comparator\Book;

class BookingController extends Controller
{
    public function booking()
    {
        $bookings = Booking::paginate(10);
        return view('admin.bookings',compact('bookings'));
    }
}
