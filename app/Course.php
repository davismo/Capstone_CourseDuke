<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    /**
     * The database table used by the model.
    */
    protected $table = 'courses';

    protected $fillable = ['name','title','credits','description','parent_id','left','right'];

    public function parent() {
    	return Course::find($this->parent_id);
    }

    public function children() {
    	return Course::where('parent_id',$this->id)->get();
    }

    // public function save($options = Array) {
    // 	parent::save($options);
    // 	return Course::where('parent_id',$this->id)->get();
    // }

}


