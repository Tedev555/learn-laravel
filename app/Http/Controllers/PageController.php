<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('welcome')->with([
            'foo' => 'bar',
            'tasks' => [
                'task1',
                'task2',
                'task3',
                'task4',
                'task5',
            ]
        ]);
    }
    public function contact() {
        return view('contact');
    }

//    public function about() {
//        return view('about');
//    }
}
