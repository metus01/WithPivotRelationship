<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
