<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function route($id)
    {
        return view("RoutePage/$id");
    }
}