<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\User;
use App\Models\Cocktails;
use App\Models\Foods;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller

{
    //show all users
    public function users(){
      $users=User::all();
      return view('Dashboard.users',compact('users'));

    }
    //show all cocktails
    public function index(){
    return view('Dashboard.index',[
        'cocktails'=>Cocktails::all()
    ]);
    }
    //show all blogs
    public function blog(){
    return view('Dashboard.blogs',[
        'blogs'=>Blogs::all()
    ]);
    }
    //show all cocktails
    public function food(){
    return view('Dashboard.foods',[
        'foods'=>Foods::all()
    ]);
    }

    //Delete Cocktail
    public function destroy(User $user){
        if ($user->role_as=='1'){
            abort(403, 'unathorized Action');
        }
        $user->delete();
        return redirect('/users')->with('message','User Delete Successfully');
    }
    //Delete Cocktail
    public function deleteBlog(User $user,Blogs $blog){
        if ($blog->user->role_as=='1'){
            abort(403, 'unathorized Action');
        }
        $blog->delete();
        return redirect('/admin/blogs')->with('message','User Delete Successfully');
    }
    //Delete Cocktail
    public function deleteCocktail(User $user, Cocktails $cocktail){
        if ($cocktail->user->role_as=='1'){
            abort(403, 'unathorized Action');
        }
        $cocktail->delete();
        return redirect('/admin/cocktails')->with('message','Cocktail Delete Successfully');
    }
    //Delete Cocktail
    public function deleteFood(User $user, Foods $food){
        if ($food->user()->role_as=='1'){
            abort(403, 'unathorized Action');
        }
        $food->delete();
        return redirect('/admin/foods')->with('message','User Delete Successfully');
    }
}
