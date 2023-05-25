<?php
namespace App\Controllers;

class NewController extends BaseController
{
    public function index()
    {
        $arr = ["Chirag" => ["PHP" => 75, "ANDROID" => 85]];
        return view('arrayex', $arr);
    }
}
?>