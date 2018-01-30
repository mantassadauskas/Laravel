<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
//    $tasks = DB::table ('tasks')->latest ()->get ();
        $tasks = Task::all ();
//return $tasks;
        return view ('posts.index', compact ('tasks'));
    }

    public function show(Task $task)
    {

//    $task = DB::table ('tasks')->find ($id);
//        $task = Task::find ($id);
//        return $task;
//    dd ($task);
//return $tasks;
        return view ('tasks.show', compact ('task'));
    }
}