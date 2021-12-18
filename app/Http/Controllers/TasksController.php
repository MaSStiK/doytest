<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function add(Request $request) {
        $game_name = $request->input('name');
        $game_year = $request->input('year');
        $game_genree = $request->input('genre');
        $game_developer = $request->input('developer');

        $task = new Task();
        $task->name = $game_name;
        $task->year = $game_year;
        $task->genre = $game_genree;
        $task->developer = $game_developer;
        $task->save();

        return response()->json($task, 201);
    }

    public function get($task_id) {

        $task = Task::find($task_id);
        return response()->json($task, 200);
    }
}
