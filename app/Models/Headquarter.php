<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    use HasFactory;

    // function xác định quan hệ ngược từ headquarter về Car
    public function car() {
        return $this->belongTo(Car::class);
    }
}
