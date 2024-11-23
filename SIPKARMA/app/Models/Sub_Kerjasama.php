<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Kerjasama extends Model
{
    use HasFactory;
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}