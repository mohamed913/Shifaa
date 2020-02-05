<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;
use App\Reveal;

class ReservationController extends Controller
{
    public function index(){
        //        forAdmin
                if(auth()->user()->hasRole('Admin')){
                    $reservations = Reservation::all();
                    // dd($reservations);
                    return view('/dashboard/reservations/index')->with('reservations',$reservations);

        
        //        forDoctor
                }else if(auth()->user()->hasRole('Doctor')){
                    $reservations = auth()->user()->doctorReservations;
                    // dd($reservations);
                    return view('/dashboard/reservations/index')->with('reservations',$reservations);

        
        //            ForAssistant
                }else if(auth()->user()->hasRole('Assistant')){
                    $myDoctor =auth()->user()->doctor;
                    $reservations = $myDoctor->doctorReservations;
                    // dd($reservations);
                    return view('/dashboard/reservations/index')->with('reservations',$reservations);

                }
            }
        
            public function create(){
        
            }
        
            public function store($reveal,$doctor){
                $limit = Reveal::find($reveal)->limit;
                $checkLimit = Reservation::where('reveal_id',$reveal)->count();
                if($checkLimit < $limit){
                    Reservation::create([
                        'patient_id'=>auth()->user()->id,
                        'reveal_id'=>$reveal,
                        'doctor_id'=>$doctor
                    ]);
                    return dd('done');
                }else{
                    return dd('this day is completed');
                }
            }
        
            public function softDelete($reveal){
                $reservations = Reservation::where('reveal_id', $reveal)->get();
                foreach ($reservations as $reservation){
                    $reservation->delete();
                }
                $reveal = Reveal::find($reveal)->delete();
                dd('this reveal and it\'s reservations is deleted');
            }        
        
}
