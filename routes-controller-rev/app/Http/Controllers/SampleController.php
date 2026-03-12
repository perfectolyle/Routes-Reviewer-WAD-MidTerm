<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{

    // static route
    public function static()
    {
        return view('01-static-route');
    }

    // dynamic route
    public function dynamic($name)
    {
        return view('02-dynamic-route', ['name' => $name]);
    }

    // multiple route parameters
    public function multiple($category, $id)
    {
        return view('03-multiple-parameter-route', [
            'category' => $category,
            'id' => $id
        ]);
    }

    // optional route parameter
    public function optional($name = "Guest")
    {
        return view('04-optional-parameter-route', ['name' => $name]);
    }

    // conditional route
    public function conditional($age)
    {
        if($age >= 18){
            $message = "You are an adult";
        } else {
            $message = "You are a minor";
        }

        return view('05-conditional-route', [
            'message' => $message,
            'age' => $age
        ]);
    }

    // dynamic route + array
    public function array($section)
    {
        $students = [
            "a" => ["John", "Maria", "Carlo"],
            "b" => ["Anna", "Luis", "Pedro"]
        ];

        return view('06-dynamic-array-route', [
            "students" => $students[$section],
            "section" => $section
        ]);
    }
}