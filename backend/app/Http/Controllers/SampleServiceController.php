<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleServiceController extends Controller
{
    public function showSampleServiceTest()
    {
        $sample = app()->make('serviceProviderTest');
        dd($sample);
    }
}
