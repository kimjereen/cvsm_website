<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function departments()
    {
        return view('about.departments.departmentof');
    }

    public function faculty()
    {
        return view('about.departments.faculty');
    }

    public function academic()
    {
        return view('academic');
    }

    public function research()
    {
        return view('research');
    }

    public function news()
    {
        return view('updates');
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function histology()
    {
        return view('facilities.online.ehistology');
    }

    public function extension()
    {
        return view('extension');
    }

    public function contact()
    {
        return view('contact');
    }

}
