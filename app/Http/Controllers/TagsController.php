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

        return view('inner',['data'=>$tag,'subData'=>$tag->tasks(),'title'=>'Task '.$tag->find($id)->name, 'subTitle'=>'Tasks', 'hasDesc'=>false]);
    }

    public function createTag(){
        $tag = new Tags();
        $tag->name = \request('name');
        $tag->created_at = Carbon::now();
        $tag->save();
    }
}
