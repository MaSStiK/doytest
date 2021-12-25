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

    public function add(Request $request) { // Создать задачу

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

    public function get($task_id) { // Посмотреть задачу по id

        $task = Task::find($task_id);

        return response()->json($task, 200);
    }

    public function edit(Request $request, $task_id) { // Отредактировать задачу по id
        
        $game_name = $request->input('name');
        $game_year = $request->input('year');
        $game_genree = $request->input('genre');
        $game_developer = $request->input('developer');

        $task = Task::find($task_id);
        $task->name = $game_name;
        $task->year = $game_year;
        $task->genre = $game_genree;
        $task->developer = $game_developer;
        $task->save();

        return response()->json($task, 200);
    }

    public function delete($task_id) { // Удалить задачу по id

        $task = Task::find($task_id);
        $task->delete();

        return response()->json("Удалена задача с id " . $task_id, 200);
    }

    public function showAll() { // Посмотреть все задачи

        $task = Task::all();

        return response()->json($task, 200);
    }
}
