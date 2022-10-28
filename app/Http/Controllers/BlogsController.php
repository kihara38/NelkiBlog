<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogsController extends Controller
{

    //show all blog
    public function index(){
    return view('Blog.index',[
        'blogs'=>Blogs::latest()->filter(request(['search']))->paginate()
    ]);

    }

     //show single blog
     public function show(Blogs $blog){
        return view('Blog.show',[
            'blog'=>$blog
        ]);
    }

    //show form for blog
    public function create(){
        return view('Blog.create');
    }

    //store Foods data
    public function store(Request $request)
    {
        $formFields=$request->validate([
            'title'=>['required',Rule::unique('blogs','title')],
            'blog'=>'required',
       ]);
       if($request->hasFile('logo')){
        $formFields['logo']=$request->file('logo')->store('logos','public');
       }

       $formFields['user_id']=auth()->id();

       Blogs::create($formFields);

       return redirect('/blog')->with('message','blog created successfully!');
    }

    //show Edit form
    public function edit(Blogs $blog){
        $this->authorize('update', $blog);
        return view ('/blog.edit',['blog'=>$blog]);
    }
     //update cocktail data
     public function update(Request $request, Blogs $blog){
        $this->authorize('update', $blog);
        $formField=$request->validate([
            'title'=>['required'],
            'blog'=>'required'
       ]);
       if($request->hasFile('logo')){
        $formField['logo']=$request->file('logo')->store('logos','public');
       }
       $blog->update($formField);

       return redirect('/blog')->with('message','blog Updated successfully!');
    }

    //Delete blog
    public function destroy(Blogs $blog){
        $this->authorize('update', $blog);
        $blog->delete();
        return redirect('/blog')->with('message','blog Delete Successfully');
    }
}

