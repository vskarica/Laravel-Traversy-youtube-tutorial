<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //return 'INDEX';
        $title="Dobro došli u Laravel!!";
        //return view('pages.index');   //bez prosljeđenih varijabli
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); //korisno za slanje više varijabli nizom
    }
    public function about(){
        $title="O nama!!";
        return view('pages.about')->with('title', $title);
    }
    public function servisi(){
        $data = array(
            'title' => 'Servisi',
            'servisi' => ['Web dizajn', 'programiranje', 'SEO']
        );
        return view('pages.servisi')->with($data);
    }
}
