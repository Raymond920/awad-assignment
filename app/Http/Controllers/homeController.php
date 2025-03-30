<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // show home page
    public function showHomePage() {
        return view('home');
    }

    // show about page
    // public function showAboutPage() {
    //     return view('aboutPage');
    // }

    // // show contact page
    // public function showContactPage() {
    //     return view('contactPage');
    // }
}
