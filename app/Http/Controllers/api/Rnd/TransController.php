<?php

namespace App\Http\Controllers\api\Rnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Rnd\Tran;

class TransController extends Controller
{
    public function all()
    {
        $data = Cache::remember('trans', 60*24, function() {
            return Tran::all();
        });

        return view('welcome', compact('data'));
    }

    public function testing()
    {
        $data = Cache::remember('testing', 60*24, function() {
            return Tran::all();
        });

        return view('welcome', compact('data'));
    }

    public function flush()
    {
        Cache::tags('testing')->flush();
    }
}
