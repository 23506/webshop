<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'genre', 'release_date', 'studio', 'description', 'price'];

    public function getPrice()
    {
        return number_format($this->price / 100, 2, ',', '.');
    }
}
