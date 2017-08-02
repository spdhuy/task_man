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
use Illuminate\Support\Facades\DB;


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
        $task->save();
        return redirect("/");
    }
    public function viewEdit(){
        $task = new Task();
        $task->id = $_GET['id'];
        $task->name = $_GET['name'];
        return view('task.edit', [
            'task' => $task
        ]);
    }
    public function editTask(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        DB::table('tasks')
                ->where('id',$id)
                ->update(['name' =>$name]);
        return redirect("/");
    }
    public function viewDelete($id,$name){
        $task = new Task();
        $task -> id = $id;
        $task -> name = $name;
        return view('task.delete', [
            'task' => $task
        ]);
    }
    public function deleteTask(){
        $id = $_POST['id'];
        DB::table('tasks')
            ->where('id',$id)
            ->delete();
        return redirect("/");
    }
}