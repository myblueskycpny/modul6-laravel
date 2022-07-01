<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
use HasFactory;
protected $guarded = [];
protected $table='pelanggan';
public function products(){
return $this->hasMany(produk::class);
}
}