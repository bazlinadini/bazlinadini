<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'tb_golongan';

    // Primary Key
    protected $primaryKey = 'gol_id';

    // Kolom yang bisa diisi secara massal (mass assignment)
    protected $fillable = [
        'gol_kode',
        'gol_nama',
    ];

    // Timestamps (aktifkan atau nonaktifkan jika tidak digunakan)
    public $timestamps = true;

    /**
     * Relasi dengan model Pelanggan
     * (Satu Golongan dapat memiliki banyak Pelanggan)
     */
    public function pelanggans()
    {
        return $this->hasMany(Pelanggan::class, 'pel_id_gol', 'gol_id');
    }
}
