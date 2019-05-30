<?php

namespace App\Http\Controllers;

use App\ApplyRecord;
use Illuminate\Support\Facades\DB;

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

    public function autoGenerate()
    {
        $flag = request('flag');
        $enabled = (int)($flag === 'true');
        $state = DB::table('apply_states')
            ->where('description', 'auto-generate')
            ->update(['enabled' => $enabled]);
        return $state;
    }

    public function create()
    {
        return view('apply.create');
    }
}
