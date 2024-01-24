<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemoteSensor extends Model
{
    use HasFactory;
    protected $fillable = ['device_id', 'fan', 'heater', 'fogger', 'pad'];
}
