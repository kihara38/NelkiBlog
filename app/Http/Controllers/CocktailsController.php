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
            ->paginate(10)
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

       $formFields['user_id']=auth()->id();

       Cocktails::create($formFields);

       return redirect('/cocktails')->with('message','Cocktail created successfully!');
    }

    //show Edit form
    public function edit(Cocktails $cocktail){
        $this->authorize('update', $cocktail);
        return view ('/cocktail.edit',['cocktail'=>$cocktail]);
    }
    //update cocktail data
    public function update(Request $request, Cocktails $cocktail){
        $this->authorize('update', $cocktail);
        // if ($cocktail->user_id != auth()->id()){
        //     abort(403, 'unathorized Action');
        // }
        $formField=$request->validate([
            'title'=>['required'],
            'procedure'=>'required',
            'ingredients'=>'required'
       ]);
       if($request->hasFile('logo')){
        $formField['logo']=$request->file('logo')->store('logos','public');
       }
       $cocktail->update($formField);

       return back()->with('message','Cocktail Updated successfully!');
    }

    //Delete Cocktail
    public function destroy(Cocktails $cocktail){
        if ($cocktail->user_id != auth()->id()){
            abort(403, 'unathorized Action');
        }
        $cocktail->delete();
        return redirect('/cocktails')->with('message','Cocktail Delete Successfully');
    }
}


