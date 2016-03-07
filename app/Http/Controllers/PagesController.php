<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {
   
	public function home() {
		return view('pages.home');
	}

    public function about() {
    	return view('pages.about');
    }

    public function contact() {
    	return view('pages.contact');
    }

    public function profile() {
    	return view('pages.profile');
    }

    public function sched() {
        return view('pages.sched');
    }

    public function sched2() {
        return view('pages.sched2');
    }

    public function mysched() {
        return view('pages.mysched');
    }  

    public function gpacalc() {
        return view('pages.gpacalc');
    } 

    public function tmp() {
        return view('pages.tmp');
    }   


}
