<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class loginController extends Controller
{
    // show login form
    public function showLoginForm() {
        return view('loginPage');
    }

    // validate login form
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        // Retrieve user data from 'user' table
        $user = user::where('email', $email)->first();
        
        // Check if user exists
        if($user){
            // Verify the password
            if($password === ($user->password)){
                echo 'Login successful';
                return redirect('/welcome');
            } else {
                echo 'Invalid password';
            }
        } else {
            echo 'User not found';
        }
    }

    // print user table
    public function printUserTable(){
        // Retrieve all users data from 'user' table
        $users = user::all();

        // Print the data
        foreach ($users as $user) {
            echo $user->id . ' ' . $user->name . ' ' . $user->email . '<br>';
        }
    }
}
