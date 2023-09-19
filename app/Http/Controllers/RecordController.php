<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;

class RecordController extends Controller
{
    public function index(Progress $progress)
    {
        return $progress->get();
    }
}
