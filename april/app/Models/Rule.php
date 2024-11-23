<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'id_gejala');
    }
    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class, 'id_kerusakan');
    }
}
