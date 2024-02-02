<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tbl_transaksi';
    protected $fillable = [
        'no_transaksi',
        'diskon',
        'tgl_transaksi',
        'kembalian',
        'total_bayar',
        'uang_pembeli'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
