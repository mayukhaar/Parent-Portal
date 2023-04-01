<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentPortal extends Controller
{
 public function index()
{
    $form_name = "<b>Parents</b>";
$grade = "<b>11</b>";


    return view('parent_portal',  compact('form_name', 'grade'));
}
}
