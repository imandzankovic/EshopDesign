<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taskModel;
use App\userModel;
use Session;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=taskModel::all();
        $users=userModel::all();
        $data=array();
        if(Session::has('loginId')){
            $data=userModel::where('id','=', Session::get('loginId'))->first();
        }
        return view('showAllTasks')->with('tasks', $tasks)->with('users', $users)->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $taskObj = new taskModel;
        $taskObj->name = $request->name;
        $taskObj->description = $request->description;
        $taskObj->details = $request->details;
        $taskObj->done = $request->has('done');
        $taskObj->user_id = $request->user_id;
        $taskObj->save();
        return redirect('tasks');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $taskObj = taskModel::find($id);
        $taskObj->name = $request->name;
        $taskObj->description = $request->description;
        $taskObj->details = $request->details;
        $taskObj->done = $request->has('done');
        $taskObj->user_id = $request->user_id;
        $taskObj->save();
        return redirect('tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taskToDelete = taskModel::find($id);
        $taskToDelete->delete();
        return redirect('tasks');
    }
}
