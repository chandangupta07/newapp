<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	//protected $guarded = [];

	protected $fillable = [
      'project_id','completed','description'
    ];
    //
    public function project(){
    	return $this->belongsTo(project::class);
    }
    public function complete($completed=true){
    	$this->update([
    		'completed'=>$completed
    	]);
    }
    public function incomplete(){
    	$this->complete(false);
    }
}
