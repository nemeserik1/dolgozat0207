<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    use HasFactory;
    public function index()
    {
         $destinationUser = Destination::with(['user','destination'])->get();
    }
}
