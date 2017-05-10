<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Admin\Entities\Task;
use Modules\Admin\Http\Requests\CreateTaskRequest;

use Carbon\Carbon;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $tasks=Task::latest()->where('publish_at','<=',Carbon::now())->get();
        $message='123';
        return view('admin::tasks.index',compact('message','tasks'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreateTaskRequest $request)
    {
        //$this->validate($request,['title'=>'required']);
        $input=$request->all();
        if($request->session()->has('_token')){
            $token=$request->session()->get('_token');
            $result=$input['_token'] <=> $token;
            if($result==0){
               Task::create($input);     
               return redirect('admin/tasks/');
            }
        }
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        //return $id;
        $task=Task::find($id);
        if(is_null($task)){
            abort(404);
        }
        
        return view('admin::tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('admin::tasks.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
        return view('admin::tasks.destroy');
    }
}
