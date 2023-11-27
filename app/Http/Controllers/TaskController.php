<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index()
  {
    $tasks = Task::all();

    return response()->json($tasks);
  }

  public function store(Request $request)
  {
    $validated = $this->validateRequest($request);

    $task = Task::create($validated);

    return response()->json($task, 201);
  }

  public function show(Task $task)
  {
    return response()->json($task); 
  }

  public function update(Request $request, Task $task)
  {
    $validated = $this->validateRequest($request);

    $task->update($validated);

    return response()->json($task);
  }

  public function destroy(Task $task)
  {
    $task->delete();

    return response()->noContent();
  }

  protected function validateRequest(Request $request)
  {
    return $request->validate([
      'title' => 'required|max:255',
      'body' => 'required'
    ]);
  }

}