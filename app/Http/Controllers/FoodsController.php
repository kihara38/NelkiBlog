<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    //show all foods
    public function index(){
    return view('Food.index',[
        'foods'=>Foods::all()
        // latest()->filter(request(['search']))->paginate(10)
    ]);

    }

     //show single cocktail
     public function show(Foods $food){
        return view('Food.show',[
            'food'=>$food
        ]);
    }

    //show form for cocktail
    public function create(){
        return view('Food.create');
    }
}
