<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {

        //Valida que o campo nome é obrigatório e que possui no máximo 255 caracteres
        $request->validate([
            "name" => "required|max:255",
            "complete" => "required"
        ]);

        $task =  Task::create([
            'name' => $request->input('name'),
            'complete' =>$request->input('complete')
        ]);
        return $task;
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            "name" => "required|max:255"
        ]);
        //Altera a propriedade também no banco de dados
        $task->name = $request->input('name');
        $task->save();
        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([
            'success' => true
        ]);       
    }
}
