<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PerBobot extends Model
{
    use HasFactory;
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public static function jumlah()
    {
        return [
            DB::table('per_bobots')->find(1)->hasil,
            DB::table('per_bobots')->find(2)->hasil,
            DB::table('per_bobots')->find(3)->hasil,
            DB::table('per_bobots')->find(4)->hasil,
        ];
    }
}
