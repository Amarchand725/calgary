<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        # code...
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|max:255',
            'description' => 'max:500',
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        try{
            $model = Booking::create([
                'service_id' => $request->service_id,
                'name' => $request->name,
                'email' => $request->email,
                'date_time' => $request->date_time,
                'description' => $request->description,
            ]);

            //here will send email with both customer & admin
            
            if($model){
                return redirect()->back()->with('message', 'You have booked service successfully !');
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
