<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatokModel;

class PatokController extends Controller
{
    public function __construct()
    {
        $this ->PatokModel= new PatokModel();
    }

    public function index()
    {
        return view('Gunung.index');
        }
}
