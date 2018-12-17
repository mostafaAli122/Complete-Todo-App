<?php

namespace App\Http\Controllers;

use App\todo;   
use Illuminate\Http\Request;

class todosController extends Controller
{
    public function index(){
        $todos=Todo::all();
        return view('todos')->with('todos',$todos);
    }
    public function store(Request $request){
        $todo=new todo;
        $todo->todo=$request->todo;
        $todo->save();
        return redirect()->back();
    }
    public function delete($id){
        $todo=todo::find($id);
        $todo->delete();
        return redirect()->back();
    }
    public function update($id){
        $todo=todo::find($id);
       
        return view('update')->with('todo',$todo);
    }
    public function save(Request $request,$id){
        $todo=todo::find($id);
       $todo->todo=$request->todo;
       $todo->save(); 
        return redirect()->route('todos');
    }
    public function completed($id){
        $todo=todo::find($id);
        $todo->completed =1;
        $todo->save();
        return redirect()->back();
    }
}
