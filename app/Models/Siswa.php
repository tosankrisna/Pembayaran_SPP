<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id_siswa";
    protected $guarded = ['id_siswa'];

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
