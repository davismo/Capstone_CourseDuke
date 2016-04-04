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

    /**
     * Gets a group of courses in tree structure
     * @param  integer $root The ID of the root node in the tree
     * @return [type]        [description]
     */
    public static function tree($root = 1) {
        // get the root course
        $root_course = self::find($root);

        // find it's children
        $children = $root_course->children();

        // convert it to an array
        $root_course = $root_course->toArray();

        // if there are children
        if (count($children) > 0) {
            // create a sub-array for those children
            $root_course['children'] = [];
            foreach($children as $child) {
                $root_course['children'][] = self::tree($child->id);
            }
        }
        $root_course['text'] = $root_course['name'];
        return $root_course;


        // $items = [];

        // // Build array of item references:
        // foreach($courses as $key => &$item) {
        //    $itemsByReference[$item['id']] = &$item;
        //    // Children array:
        //    $itemsByReference[$item['id']]['children'] = array();
        //    // Empty data class (so that json_encode adds "data: {}" ) 
        //    $itemsByReference[$item['id']]['data'] = new StdClass();
        // }

        // // Set items as children of the relevant parent item.
        // foreach($data as $key => &$item)
        //    if($item['parent_id'] && isset($itemsByReference[$item['parent_id']]))
        //       $itemsByReference [$item['parent_id']]['children'][] = &$item;

        // // Remove items that were added to parents elsewhere:
        // foreach($data as $key => &$item) {
        //    if($item['parent_id'] && isset($itemsByReference[$item['parent_id']]))
        //       unset($data[$key]);
        // }
        // // Encode:
        // echo json_encode($data);

    }

}


