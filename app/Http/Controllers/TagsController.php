<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(){
        return view('list',['data'=> Tags::all(),'title'=>'Tags','link'=>'tag','hasDesc'=>false]);
    }

    public function innerTag(int $id){
        $tag = Tags::find($id);
        $params = ['data'=>$tag,'subData'=>$tag->tasks()->get(),'title'=>'Tag','link'=>'task', 'subTitle'=>'Tasks', 'hasDescTasks'=>true, 'hasDesc'=>false];
        return view('inner', $params);
    }

    public function createTag(Request $request){
        $tag = new Tags();
        $tag->name = $request->input('name');
        $tag->created_at = Carbon::now();
        $tag->save();

        return redirect('tags');
    }
}
