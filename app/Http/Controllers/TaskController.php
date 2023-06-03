<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PDOException;

class TaskController extends Controller
{
    /**
     * Display a listing of the tasks.
     *
     */
    public function index()
    {
        try {
            $tasks = Task::where('active', 1)->withCount('items')->get();

            return view('pages.task.index', compact('tasks'));
        } catch (Exception $exception) {
            abort(500);
        }
    }

    public function view($id)
    {
        try {
            $task = Task::findOrFail($id);

            return view('pages.task.view', compact('task'));
        } catch (ModelNotFoundException $exception) {
            throw new ModelNotFoundException("Error Processing Request", 404);
        } catch (Exception $exception) {
            abort(500);
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
