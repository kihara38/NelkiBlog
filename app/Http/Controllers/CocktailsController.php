<?php

namespace App\Http\Controllers;

use App\Models\Cocktails;
use Illuminate\Http\Request;

class CocktailsController extends Controller
{
    //show all cocktails
    public function index(){
        return view('Cocktail.index',[
            'cocktails'=>Cocktails::all()
            // latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    //show single cocktail
    public function show(Cocktails $cocktail){
        return view('Cocktail.show',[
            'cocktail'=>$cocktail
        ]);
    }

    //show form for cocktail
    public function create(){
        return view('Cocktail.create');
    }


}
