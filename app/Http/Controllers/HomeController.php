<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::all();
        $page_title = 'Jordan!!!!!';

        $data = [
            'people' => $people,
            'title' => $page_title,
        ];

        return view('home')->with($data);
    }

    public function jordan()
    {
        $jordan_variable  = "Hello!";

        return view('jordan');
    }
}
