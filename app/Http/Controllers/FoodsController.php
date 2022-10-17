<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FoodsController extends Controller
{
    //show all foods
    public function index(){
    return view('Food.index',[
        'foods'=>Foods::latest()->filter(request(['search']))->paginate(1)
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

    //store Cocktail data
    public function store(Request $request)
    {
        $formFields=$request->validate([
            'title'=>['required',Rule::unique('cocktails','title')],
            'recipe'=>'required',
            'ingredients'=>'required'
       ]);
       if($request->hasFile('logo')){
        $formFields['logo']=$request->file('logo')->store('logos','public');
       }

       Foods::create($formFields);

       return redirect('/foods')->with('message','Food created successfully!');
    }
}
