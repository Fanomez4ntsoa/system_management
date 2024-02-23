<?php

namespace App\Http\Controllers\Members;

use Illuminate\Routing\Controller;

class MembersController extends Controller
{
    public function __construct(
    ) {
        // Do nothing
    }

    public function index()
    {
        return view ('welcome');
    }
}