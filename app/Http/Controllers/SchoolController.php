<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return School::all();
    }
}
