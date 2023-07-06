<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Resources\Task as TaskResource;
use GuzzleHttp\Promise\Create;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::paginate();
        return TaskResource::collection($tasks);
      }

      public function show($id){
        $tasks = Task::findOrFail( $id );
        return new TaskResource( $tasks );
      }

      public function store(Request $request){
        $data = $request -> all();

        $tasks = Task::create($data);

        if( $tasks->save() ){
            return new TaskResource( $tasks );
        }
      }

       public function update(Request $request){
        $tasks = Task::findOrFail( $request->id );
        $data = $request -> all();

        $tasks -> update($data);

        if( $tasks->save() ){
          return new TaskResource( $tasks );
        }
      }

      public function destroy($id){
        $tasks = Task::findOrFail( $id );
        if( $tasks->delete() ){
          return new TaskResource( $tasks );
        }

      }
}
