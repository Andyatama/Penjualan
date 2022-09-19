<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\Kategori;
use App\Models\Pembelian;
use App\Models\Penjualan;


class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $guarded = [];

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    
    public function pembelian(){
        return $this->hasMany(Pembelian::class);
    }
}
