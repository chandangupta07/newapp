<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
class ProjectsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $projects = project::where('owner_id',auth()->id())->get();
        //$projects = project::all();
        //return $projects;

    	return view('projects.index',compact('projects'));
    }
    public function create(){
        return view('projects.create');
    }

    /*public function show($id){
        $project = project::findOrFail($id);
        return view('projects.show',compact('project'));
    }*///same below
    public function show(project $project){
       
        return view('projects.show',compact('project'));
    }

    public function edit($id){
        $project = project::findOrFail($id);
        return view('projects.edit',compact('project'));
    }

    /*public function update($id){
        $project = project::findOrFail($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }*/ // same as below
    public function update(project $project){
        $project->update(request(['title','description']) );
        
        return redirect('/projects');
    }

    public function destroy($id){
        $project = project::findOrFail($id)->delete();
        return redirect('/projects');
    }

    /*public function store(){
        project::create([
           'title' =>
        ]);
    	$project = new project();
    	$project->title = request('title');
    	$project->description = request('description');
    	$project->save();
    	return redirect('/projects');
    }*///same as below
    public function store(){
        //dd($request->all());
        //$validate_atributes = request()->all();
        //dd($validate_atributes);
        request()->request->add(['owner_id' => auth()->id()]);
        //dd(request()->all());
        //$validate_atributes['owner_id']=auth()->id();
        $validate_atributes = request()->validate([
            'title'=>['required','min:4'],
            'description'=>['required','min:10'],
            'owner_id'=>['int']

        ]);
        //dd($validate_atributes);
        
        //$validate_atributes['owner_id'] = auth()->id();
        //dd($validate_atributes);
       /* project::create([
           'title' =>request('title'),
           'description'=>request('description'),
           'owner_id'=>auth()->id()
        ]);*/
        project::create($validate_atributes);
        //add title and description in model as fillable property
        
        return redirect('/projects');
    }
}
