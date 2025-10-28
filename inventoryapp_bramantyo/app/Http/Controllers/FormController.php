<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register()
    {
        return view('page.register');
    }
    public function welcome(Request $request)
    {
        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        $gender = $request->input('gender');
        $nationality = $request->input('nationality');
        $language = $request->input('language');
        $bio = $request->input('bio');
        return view('page.welcome', compact('firstName', 'lastName', 'gender', 'nationality', 'language', 'bio'));
    }
}
