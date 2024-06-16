<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;

abstract class Controller
{
    use DispatchesJobs, ValidatesRequests;
}
