<?php

namespace App\Http\Controllers;

use App\Models\Tags;
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
        $params = ['data' => $task, 'subData' => $task->tags()->get(),'link'=>'tag', 'title' => 'Task', 'subTitle'=>'Tags', 'hasDescTasks'=>false, 'hasDesc'=>true];
        return view('inner',$params);
    }

    public function createTaskPage(){

            $tags = Tags::all();

            return view('create_task',['tags'=>$tags]);


    }

    public function createTask(Request $request){
        $task = new Tasks();
            $task->name = $request->input('name');
            $task->description = $request->input('description');
            $task->created_at = Carbon::now();
        if ($task->save()) {

            $task->tags()->attach($request->input('tags'));

            return redirect('tasks');
        }
    }
}
