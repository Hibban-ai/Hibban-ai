<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table= 'transaksi';
    protected $fillable= ['nama_pelanggan','nama_menu','harga','jumlah','total_harga','nama_pegawai','tanggal'];

    public function menu(){
        return $this->belongsTo(Menu::class, 'id', 'id');
    }
}