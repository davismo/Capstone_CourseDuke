<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // get the courses data from the csv
        $courses_csv = file(database_path("seeds/courses/isat_courses.csv"));
        foreach ($courses_csv as $i => $course) {
        	if ($i > 0) {
        		$fields = str_getcsv(trim($course));
        		App\Course::firstOrCreate([
        			'name'        => $fields[1],
        			'title'       => $fields[2],
        			'credits'     => $fields[3],
        			'description' => $fields[4],
        			'parent_id'   => $fields[5],
        			'left'        => $fields[6],
        			'right'       => $fields[7],
        		]);
        	}
        }
    }
}
