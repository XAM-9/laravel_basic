<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function blog()
    {
        $blogs = [
            [
                'title' => 'My First Post',
                'content' => 'This is the content of my first post.',
                'author' => 'John Doe',
                'status' => true
            ],
            [
                'title' => 'Another Day, Another Post',
                'content' => 'Here is some more content for another post.',
                'author' => 'Jane Smith',
                'status' => false
            ],
            [
                'title' => 'Learning Laravel',
                'content' => 'Today I learned about routing in Laravel.',
                'author' => 'Alice Johnson',
                'status' => true
            ]
            // Add more posts as needed
        ];
        return view('blog', compact('blogs'));
    }

    function about()
    {
        $name = "Nakarin Wongsang";
        $date = "4 เมษายน 2568";

        return view('about', compact('name', 'date'));
    }

    function create()
    {
        return view('form');
    }

    
}
