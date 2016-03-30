<?php


use Illuminate\Database\Seeder;


class csvseeder extends Seeder
{

	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->table = 'courses';
    	$this->filename = base_path().'database/seeds/courses/isat_courses.csv';
    }

    public function run()
    {
        parent::run();
    }

}
