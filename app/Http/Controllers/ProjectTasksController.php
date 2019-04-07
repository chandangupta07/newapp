<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\project;
class ProjectTasksController extends Controller
{
    public function update(Task $task){
    	//request()->has('completed')?$task->complete():$task->incomplete();
    	$method = request()->has('completed')?'complete':'incomplete';
    	$task->$method();
        /*$task->update([
    		'completed'=>request()->has('completed')
    	]);*/
    	return back();
    }
    public function store(project $project){
    	$validate_atributes = request()->validate([
            'description'=>'required'
        ]);
        //dd($validate_atributes);
    	$project->addTask($validate_atributes);
    	//same below we make a method in project.php called add task and add new task with associated project
    	/*Task::create([
    		'project_id'=>$project->id,
    		'description'=>request('description')
    	]);*/
    	return back();
    }
}
