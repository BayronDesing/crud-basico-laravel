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
        
        return view('users.index',);
    }  
    //get
    public function users() {
        $users = User::all();
        
        return view('users.users',compact('users'));
    } 
    //get
    public function create() { 
        return view('users.create');
    } 
    //post
    public function store(Request $_Request) {

        $users=User::create($_Request->all());
        return redirect()->route('users.users');
    } 
    //get
    public function edit($id) {
        $users=User::find($id);
        return view('users.edit',compact('users'));
    }  
    //post//put
    public function update(Request $request, $id) {
        $users = User::find($id)->update($request->all());
        return redirect()->route('users.users');
    }   
    //post//delete  
    public function destroy($id) {
    $user=User::find($id)->delete();
    return redirect()->route('users.users');
    }   
}
