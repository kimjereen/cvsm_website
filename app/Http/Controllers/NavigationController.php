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

    public function readNews()
    {
        return view('updates.readnews');
    }

    public function readEvent()
    {
        return view('updates.readevent');
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function histology()
    {
        return view('facilities.onlineresources.ehistology');
    }

    public function extension()
    {
        return view('extension');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacyPolicy()
    {
        return view('privacypolicy');
    }

    public function login()
    {
        return view('login');
    }












    //MAMALS routing STARTS HERE
    public function goat()
    {
        return view('facilities.onlineresources.ehistology-categories.mammals.goat');
    }

    public function dog()
    {
        return view('facilities.onlineresources.ehistology-categories.mammals.dog');
    }

    public function cat()
    {
        return view('facilities.onlineresources.ehistology-categories.mammals.cat');
    }

    public function cattle()
    {
        return view('facilities.onlineresources.ehistology-categories.mammals.cattle');
    }

    public function horse()
    {
        return view('facilities.onlineresources.ehistology-categories.mammals.horse');
    }

    public function pig()
    {
        return view('facilities.onlineresources.ehistology-categories.mammals.pig');
    }

    public function otherMammals()
    {
        return view('facilities.onlineresources.ehistology-categories.mammals.othermammals');
    }
    //MAMALS routing ENDS HERE


    //AVIAN routing STARTS HERE
    public function chicken()
    {
        return view('facilities.onlineresources.ehistology-categories.avian.chicken');
    }
    public function duck()
    {
        return view('facilities.onlineresources.ehistology-categories.avian.duck');
    }
    public function otherAvians()
    {
        return view('facilities.onlineresources.ehistology-categories.avian.otheravians');
    }
    //AVIAN routing ENDS HERE
}
