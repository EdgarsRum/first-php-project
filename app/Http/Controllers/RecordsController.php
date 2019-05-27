<?php

namespace App\Http\Controllers;

use App\ApplyRecord;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function index()
    {

        return $project = ApplyRecord::all();
    }

    public function post()
    {
        $record = new ApplyRecord();
        $record->description = request('description');
        $record->save();
        return ApplyRecord::all();
//        return request()->all();
//        return request('description');
    }


    public function create()
    {
        return view('apply.create');
    }
}
