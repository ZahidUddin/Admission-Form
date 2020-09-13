<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\UserInfos;

class StudentinfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $userInfos=UserInfos::get();
        return view('admin.studentinfo.index',compact('userInfos'));
        
    }

}
