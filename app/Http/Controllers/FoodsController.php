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

     //show single Foods
     public function show(Foods $food){
        return view('Food.show',[
            'food'=>$food
        ]);
    }

    //show form for Foods
    public function create(){
        return view('Food.create');
    }

    //store Foods data
    public function store(Request $request)
    {
        $formFields=$request->validate([
            'title'=>['required',Rule::unique('foods','title')],
            'recipe'=>'required',
            'ingredients'=>'required'
       ]);
       if($request->hasFile('logo')){
        $formFields['logo']=$request->file('logo')->store('logos','public');
       }

       $formFields['user_id']=auth()->id();

       Foods::create($formFields);

       return redirect('/foods')->with('message','Food created successfully!');
    }

    //show Edit form
    public function edit(Foods $food){
        $this->authorize('update', $food);

        return view ('/food.edit',['food'=>$food]);
    }
     //update cocktail data
     public function update(Request $request, Foods $food){
        $this->authorize('update', $food);
        $formField=$request->validate([
            'title'=>['required'],
            'recipe'=>'required',
            'ingredients'=>'required'
       ]);
       if($request->hasFile('logo')){
        $formField['logo']=$request->file('logo')->store('logos','public');
       }
       $food->update($formField);

       return back()->with('message','Food Updated successfully!');
    }

    //Delete Foods
    public function destroy(Foods $food){
        $this->authorize('update', $food);
        $food->delete();
        return redirect('/foods')->with('message','Foods Delete Successfully');
    }
}


