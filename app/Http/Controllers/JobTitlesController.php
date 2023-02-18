<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobTitles;

class JobTitlesController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        $jobtitles = JobTitles::paginate(5);

        return view('system-mgmt/jobtitles/index', ['jobtitles' => $jobtitles]);
    }
     public function create()
    {
        return view('system-mgmt/jobtitles/create');
    }
      public function show($id)
    {
        //
    }
}
