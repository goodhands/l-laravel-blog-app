<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //
    public function index(){
        // $tasks = DB::table('tasks')->get();

        $tasks = Task::all();

        // return $tasks; -> this returns a json with the result and could be used as an api endpoint easily

        return view('tasks/index', compact('tasks'));
    }

    public function show(Task $tasks){
        // we are using route-model binding here
        //since we have already created the Task model,
        //we can say `Task $task` where $task must be the same
        //variable name as the one used in routes (web.php)
        // $tasks = DB::table('tasks')->find($id);
        // return $task;
        // dd($tasks);
        // return $tasks; -> this returns a json with the result and could be used as an api endpoint easily

        return view('tasks/show', compact('tasks'));
    }
}
