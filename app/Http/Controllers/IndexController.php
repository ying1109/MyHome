<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        // $action = \Route::current()->getActionName();
        // dd($action);
        $action = \Route::current()->getActionName();
        dd($action);

        return view('welcome');
    }



}
