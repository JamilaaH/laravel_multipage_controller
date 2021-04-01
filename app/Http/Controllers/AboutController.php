<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $contenu = (object) [
            'titre'=> 'Strong Coffee, Strong Roots',
            'soustitre'=> 'About Our Cafe',
            'texte'=> 'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee
            sourced from artisan farmers in various regions of South and Central America. We are
            dedicated to travelling the world, finding the best coffee, and bringing back to you here in
            our cafe.',
            'suite' => 'We guarantee that you will fall in <em>lust</em> with our decadent blends the
            moment you walk inside until you finish your last sip. Join us for your daily routine, an
            outing with friends, or simply just to enjoy some alone time.'
        ];
        return view ('pages/about', compact('contenu'));
    }
}
