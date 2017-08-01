<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 8/1/17
 * Time: 1:33 PM
 */
namespace App\Http\Controllers;
use App\Task;
use App\Http\Controllers\Controller;
class TaskController extends Controller{
    public function index(){
        return view('task.list', [
            'tasks' => Task::all()
        ]);
    }
    public function viewAdd(){
        return view('task.add');
    }
    public function addTask(){
        $task = new Task();
        $task->id = $_POST['id'];
        $task->name = $_POST['name'];
        $task->date_created = $_POST['date_created'];
        $task->save();
        return redirect("/");
    }
}