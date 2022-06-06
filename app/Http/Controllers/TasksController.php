<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        return view('list',['data'=> Tasks::all(),'title'=>'Tasks','link'=>'task','hasDesc'=>true]);
    }

    public function innerTask(int $id){
        $task = Tasks::find($id);
        return view('inner',['data' => $task, 'subData' => $task->tags(), 'title' => 'Task '.$task->find($id)->name,'subTitle'=>'Tags', 'hasDesc'=>true]);
    }

    public function createTask(){
        $task = new Tasks();
        $task->name = \request('name');
        $task->description = \request('description');
        $task->created_at = Carbon::now();
        $task->save();
    }
}
