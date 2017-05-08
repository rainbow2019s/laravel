<?php

namespace App\Http\Controllers\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SitesController extends Controller
{
    //
    public function index()
    {

        $first='l';
        $last='hao';
        $departments=['aaa','bbbb','cccc','dddd'];

        return view('about/index/index',
            compact('first','last','departments'));
            //['first'=>$first,'last'=>$last,'departments'=>$departments]);
              
    }
}
