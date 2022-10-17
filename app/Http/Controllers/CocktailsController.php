<?php

namespace App\Http\Controllers;

use App\Models\Cocktails;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CocktailsController extends Controller
{
    //show all cocktails
    public function index(){
        return view('Cocktail.index',[
            'cocktails'=>Cocktails::latest()->filter(request(['search']))
            ->paginate(1)
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

    //store Cocktail data
    public function store(Request $request)
    {
        $formFields=$request->validate([
            'title'=>['required',Rule::unique('cocktails','title')],
            'procedure'=>'required',
            'ingredients'=>'required'
       ]);

       if($request->hasFile('logo')){
        $formFields['logo']=$request->file('logo')->store('logos','public');
       }

       Cocktails::create($formFields);

       return redirect('/cocktails')->with('message','Cocktail created successfully!');
    }

}
