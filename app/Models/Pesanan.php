<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\PesananDetail;

class Pesanan extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pesanan_detail() {
        return $this->hasMany(PesananDetail::class, 'pesanan_id', 'id');
    }
}
