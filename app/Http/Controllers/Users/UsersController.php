<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;

class UsersController extends Controller
{
    //get
    public function index() {
        $users = User::all();
        
        return view('users.index',compact('users'));
    }  
    //get
    public function create() { 

    } 
    //post
    public function store() {

    } 
    //get
    public function edit() {

    }  
    //post//put
    public function update() {

    }   
    //post//delete  
    public function destroy() {

    }   
}
