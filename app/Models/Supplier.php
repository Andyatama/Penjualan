<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $guarded = [];

    public function barang(){
        return $this->belongsToMany(Barang::class);
    }
}
