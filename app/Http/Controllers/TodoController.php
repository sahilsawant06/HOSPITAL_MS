<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function create()
    {
        return view('todo_add');
    }


    public function store(Request $request)
    {
        // return $request->input('name');
        // $res = new todo();
        // $res->name=$request->input('name');
        // $res->save();

        //for only one column
        // $validateddata = $request->validate([
        //     'name' => 'string|required'

        // ]);
        // todo::create($validateddata);
        todo::create($request->all());

        $request->session()->flash('msg','data submitted');
        return redirect('showdata');




    }


    public function show(todo $todo)
    {
        return view('showdata')->with('todoarr', $todo::all());
    }


    public function edit(todo $todo, $id)
    {
        return view('todo_edit')->with('todoarr',$todo::find($id));
    }


    public function update(Request $request, todo $todo, $id)
    {
        // echo '<pre>';
        //  print_r($request->input());
        $res = todo::find($request->id);
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','data updated');
        return redirect('showdata');
    }


    public function destroy(todo $todo,$id)
    {
        // echo '<pre>';
        // print_r($id);
        $todo::destroy(array('id',$id));
        return redirect('showdata');
    }
}
