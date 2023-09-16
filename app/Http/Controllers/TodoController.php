<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todos =Todo::all();
    return view('todos.index',[ 
               'todos'=>$todos
    ]);
}
    public function create(){
        return view('todos.create');
        }
        public function store(TodoRequest $request){
            // $request->validated();
           Todo::create([
            'title' => $request->title,
            'description'=>$request->description,
            'is_completed'=>0
           ]);
           $request->session()->flash('alert-success','todo created successfully');
           return to_route('todos.index');
        }
        public  function show ($id){
            $todo =Todo::find($id);
            if(!$todo){
                return to_route('todos.index')->withErrors([
                    'error'=>'unable to locate the Todo'
                ]);
            }
            return view('todos.show',['todo'=>$todo]);
        }
}
