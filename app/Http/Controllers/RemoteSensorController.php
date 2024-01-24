<?php

namespace App\Http\Controllers;

use App\Models\RemoteSensor;
use Illuminate\Http\Request;

class RemoteSensorController extends Controller
{
    public $data = 'hello';

    public function store(Request $request)
    {
        // return $request;
        RemoteSensor::create($request->all());
        return 'success';
    }
    public function index()
    {
        return RemoteSensor::get();
    }
}
