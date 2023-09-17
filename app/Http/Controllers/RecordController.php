<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos

class RecordController extends Controller
{
    public function index(Todo $todo)
    {
        return $todo->get();
    }
}
