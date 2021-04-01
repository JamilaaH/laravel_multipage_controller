<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $titre = "Come On In";
        $soustitre =" We'ere Open";
        $jour = [
            (object) [
                'Sunday',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday'
            ]
            ];
        $heure = [
            (object) [
                'closed', 
                '7:00 AM to 8:00 PM',
                '7:00 AM to 8:00 PM',
                '7:00 AM to 8:00 PM',
                '7:00 AM to 8:00 PM',
                '7:00 AM to 8:00 PM',
                '9:00 AM to 5:00 PM'
            ]
            ];
        return view('pages/store', compact('titre', 'soustitre', 'jour','heure'));
    }
}
