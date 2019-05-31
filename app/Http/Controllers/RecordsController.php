<?php

namespace App\Http\Controllers;

use App\ApplyRecord;
use Illuminate\Support\Facades\DB;

class RecordsController extends Controller
{
    public function index()
    {
        return ApplyRecord::all();
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
}
