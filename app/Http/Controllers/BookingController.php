<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Booking::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where('name', 'like', '%'. $request['search'] .'%')
                ->orWhere('email', 'like', '%'. $request['search'] .'%')
                ->orWhere('service_id', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.booking.search', compact('models'));
        }
        $page_title = 'All Bookings';
        $models = Booking::orderby('id', 'desc')->paginate(10);
        return view('admin.booking.index', compact('models', 'page_title'));
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

            //sending email to user
            $details = [
                'from' => 'user-new-booking',
                'title' => "You have booked service.",
                'body' => $model,
            ];
           
            \Mail::to($request->email)->send(new \App\Mail\Email($details));

            //sending email to admin
            $admin_email = User::role('Admin')->where('status', 1)->first()->email;
            $details = [
                'from' => 'admin-new-booking',
                'title' => "Recieved new service booking request as bellow.",
                'body' => $model,
            ];
           
            \Mail::to($admin_email)->send(new \App\Mail\Email($details));
            
            if($model){
                return redirect()->back()->with('message', 'You have booked service successfully !');
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
