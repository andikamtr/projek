<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PerKriteria extends Model
{
    use HasFactory;
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
    public static function jumlah()
    {
        return [
            DB::table('per_kriterias')->find(1)->hasil,
            DB::table('per_kriterias')->find(2)->hasil,
            DB::table('per_kriterias')->find(3)->hasil,
            DB::table('per_kriterias')->find(4)->hasil,
        ];
    }
}
