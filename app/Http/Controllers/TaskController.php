<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the tasks.
     *
     */
    public function index()
    {
        $tasks = Task::where('active', 1)->withCount('items')->get();

        // print_r($tasks);
        // ->orderBy('position', 'asc')

        return view('pages.task.index', compact('tasks'));
    }

    public function view($id)
    {
        try {
            $task = Task::find($id);

            return view('pages.task.view', compact('task'));
        } catch (ModelNotFoundException $mdfe) {
            //throw $th;
        }
    }

    /**
     * Delete a task,
     *
     */
    public function destroy($id)
    {
    }
}
