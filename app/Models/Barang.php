<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PesananDetail;

class Barang extends Model
{
    use HasFactory;

    public function pesanan_detail() {
        return $this->hasMany(PesananDetail::class, 'barang_id', 'id');
    }
}
