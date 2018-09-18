<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

/*
    public function index(){
        //return 'INDEX';
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function servisi(){
        return view('pages.servisi');
    }
*/
}
