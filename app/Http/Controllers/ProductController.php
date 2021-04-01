<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = [
            (object) [
                'value1' => 'ml-auto',
                'value2' => 'mr-auto',
                'titre'=> 'Blended to Perfection',
                'soustitre' => 'Coffees & Teas', 
                'texte' => "We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.",
                'photo' => 'img/products-01.jpg'
                
            ],
            (object) [
                'value1' => 'ml-auto',
                'value2' => 'mr-auto',
                'titre'=> 'Delicious Treats, Good Eats',
                'soustitre' => 'Bakery & Kitchen', 
                'texte' => "Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.",
                'photo' => 'img/products-02.jpg'
                
            ],
            (object) [
                'value1' => 'ml-auto',
                'value2' => 'mr-auto',
                'titre'=> 'From Around the World',
                'soustitre' => 'Bulk Speciality Blends', 
                'texte' => "Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.",
                'photo' => 'img/products-03.jpg'
            ],
        ];
        return view ('pages/products', compact('products'));
    }
}
