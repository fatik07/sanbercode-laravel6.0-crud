<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Pertanyaan
{
    public static function get_all()
    {
        $isi = DB::table('pertanyaan')->get();
        return $isi;
    }

    public static function save($data)
    {
        $new_isi = DB::table('pertanyaan')->insert($data);
        return $new_isi;
    }
}
