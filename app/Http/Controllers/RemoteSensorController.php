<?php

namespace App\Http\Controllers;

use App\Models\RemoteSensor;
use Illuminate\Http\Request;

class RemoteSensorController extends Controller
{
    public $data = 'hello';

    public function store(Request $request)
    {
        $remoteSensor = RemoteSensor::where('device_id', $request->device_id)->first();
        if ($remoteSensor) {
        //    return $request->all();
            $remoteSensor->update($request->all());
            return "updated";
        } else {
            RemoteSensor::create($request->all());
        }
        return 'success';
    }
    public function index()
    {
        return RemoteSensor::get();
    }
}
