<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class AdminController extends Controller 
{
    public function __construct(

    ) {
        // Do nothing
    }

    public function index() {
        return view("welcome");
    }
}