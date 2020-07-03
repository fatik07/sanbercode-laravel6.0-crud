<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function get_all($pertanyaan_id)
    {
        $jawaban = DB::table('jawaban')
            ->join('pertanyaan', 'pertanyaan_id', '=', 'jawaban.pertanyaan_id')
            ->where('pertanyaan.id', '=', $pertanyaan_id)
            ->select('jawaban.*')
            ->get();
        $pertanyaan = DB::table('pertanyaan')
            ->where('id', '=', $pertanyaan_id)
            ->get();

        return view('adminlte3.jawaban.index', ['jawaban' => $jawaban->all(), 'pertanyaan' => $pertanyaan->all()]);
    }

    public static function save($request)
    {
        $new_isi = DB::table('jawaban')->insert($request);
        return $new_isi;
    }
}
