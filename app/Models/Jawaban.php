<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function get_all($pertanyaan_id)
    {

        $jawaban = DB::table('jawaban')
            ->join('pertanyaan', 'pertanyaan.id', '=', 'jawaban.pertanyaan_id')
            ->where('pertanyaan.id', '=', $pertanyaan_id)
            ->select('jawaban.*')
            ->get();

        $pertanyaan = DB::table('pertanyaan')
            ->where('id', '=', $pertanyaan_id)
            ->get();
        return view('adminlte3.jawaban.index', ['jawaban' => $jawaban, 'pertanyaan' => $pertanyaan->all()]);
    }

    public static function save($request)
    {
        $jwb = DB::table('jawaban')->insert($request);
        return Jawaban::get_all($request['pertanyaan_id']);
    }

    public static function lihat($pertanyaan_id)
    {
        $jawaban = DB::table('jawaban')
            ->join('pertanyaan', 'pertanyaan.id', '=', 'jawaban.pertanyaan_id')
            ->where('pertanyaan.id', '=', $pertanyaan_id)
            ->select('jawaban.*')
            ->get();

        $pertanyaan = DB::table('pertanyaan')
            ->where('id', '=', $pertanyaan_id)
            ->get();
        return view('adminlte3.jawaban.show', ['jawaban' => $jawaban, 'pertanyaan' => $pertanyaan->all()]);
    }

    public static function ubah($pertanyaan_id)
    {
        $jawaban = DB::table('jawaban')
            ->join('pertanyaan', 'pertanyaan.id', '=', 'jawaban.pertanyaan_id')
            ->where('pertanyaan.id', '=', $pertanyaan_id)
            ->select('jawaban.*')
            ->get();

        $pertanyaan = DB::table('pertanyaan')
            ->where('id', '=', $pertanyaan_id)
            ->get();

        return view('adminlte3.jawaban.edit', ['jawaban' => $jawaban, 'pertanyaan' => $pertanyaan->all()]);
    }

    public static function update($pertanyaan_id, $request)
    {
        //dd($request);
        $pertanyaan = DB::table('pertanyaan')
            ->where('id', $pertanyaan_id)
            ->update([
                'nama' => $request["nama"],
                'judul' => $request["judul"],
                'isi' => $request["isi_pertanyaan"]
            ]);

        return redirect('/pertanyaan');
    }

    public static function deleted($pertanyaan_id)
    {
        $pertanyaan = DB::table('pertanyaan')
            ->where('id', $pertanyaan_id)
            ->delete();

        return redirect('/pertanyaan');
    }
}
