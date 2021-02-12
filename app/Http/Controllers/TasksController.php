<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::with('user')->paginate();

    	return Inertia::render('Tasks/Index', [
    		'tasks'	=>	$tasks
    	]);
    }

    public function edit(Task $task)
    {

    }
}
