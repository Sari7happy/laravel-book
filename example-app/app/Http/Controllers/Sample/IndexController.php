<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()
    {
        return "hello smile";
    }
    public function showId($id)
    {
        return "hello smile {$id}";
    }
}
