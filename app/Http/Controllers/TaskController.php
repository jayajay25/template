<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

use function GuzzleHttp\Promise\all;

class TaskController extends Controller
{
    public function index()
    {
       return view('tasks.index',[
        'tasks' => Task::orderBy('id', 'desc')->get(),
       ]);
    }

    public function store(Request $request)
    {
       Task::create($request->all());
       
       return back(); //same as redrect
    }

    public function edit($id)
    {
       $task = Task::find($id);
       return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        Task::where('id', $id)->update([
            'list' => $request->list
        ]);
        return redirect('tasks');
    }
    
    public function destroy($id)
    {
       Task::find($id)->delete();
       return back();
    }
}
