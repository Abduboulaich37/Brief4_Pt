<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function select(){
        $data = Task::all();
        return response()->json($data);
    }

    public function insert(Request $req){
        $data = new Task;
        $data->name = $req->name;
        $data->save();
        return response()->json($data);
    }

    public function delete($id){
        $obj = Task::find($id);
        $obj->delete();
        return response()->json($obj);
    }

    public function update(Request $req , $id){
        $upname = Task::find($id);
        $upname->name = $req->name;
        $upname->save();
        return response()->json($upname);
    }
}
