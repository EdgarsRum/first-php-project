<?php

namespace App\Http\Controllers;

use App\ApplyRecord;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function index()
    {

        return $project = ApplyRecord::all();

        return view('apply');
    }
}
