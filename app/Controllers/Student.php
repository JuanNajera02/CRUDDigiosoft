<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}

