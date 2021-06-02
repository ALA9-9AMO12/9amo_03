<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {

        return view('welcome');

    }

    public function contact() {

        return view('contact');

    }

    public function berichten() {

        return view('bericht');

    }

    public function cursus() {

        return view('cursus');

    }

    public function cursus() {

        return view('cursus');

    }
}
