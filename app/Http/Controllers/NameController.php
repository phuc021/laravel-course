<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class NameController extends Controller
{
    public function show(){
    	$userList = User::orderBy('id','DESC')->get();
    	return view('User.profile',['userList'=> $userList]);
    }
}
