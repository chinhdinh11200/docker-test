<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    public $timestamps = true;

    // protected $dateFormat = 'h:m:s';

    protected $fillable = ['name', 'founded', 'description', 'image_path'];

    // function viết quan hệ các models (one to many)
    public function carModels () {
        return $this->hasMany(CarModel::class);
    }

    // function viết quan hệ các models (one to one)
    public function headquarter () {
        return $this->hasOne(Headquarter::class);
    }

    // Define a has many through relationship
    public function engines () {
        return $this->hasManyThrough(
                Engine::class,
                CarModel::class,
                'car_id',
                'model_id'
            );
    }

    public function productionDates () {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }

}

