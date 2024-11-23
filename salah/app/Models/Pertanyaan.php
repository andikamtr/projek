<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function gejala()
    {
        return DB::table('pertanyaans')
            ->join('gejalas', 'gejalas.id_gejala', '=', 'pertanyaans.kd_gejala')
            ->get();
    }
}
