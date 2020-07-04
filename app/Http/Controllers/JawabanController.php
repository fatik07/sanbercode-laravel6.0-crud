<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pertanyaan_id)
    {
        return Jawaban::get_all($pertanyaan_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($pertanyaan_id, Request $request)
    {

        $request = $request->all();
        //dd($request);
        unset($request["_token"]);

        $request['pertanyaan_id'] = $pertanyaan_id;

        return  Jawaban::save($request);
        redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pertanyaan_id, Request $request)
    {
        $request = $request->all();
        $request['pertanyaan_id'] = $pertanyaan_id;
        return Jawaban::lihat($pertanyaan_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pertanyaan_id, Request $request)
    {
        $request = $request->all();
        $request['pertanyaan_id'] = $pertanyaan_id;
        return Jawaban::ubah($pertanyaan_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($pertanyaan_id, Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        $request['pertanyaan_id'] = $pertanyaan_id;
        return Jawaban::update($pertanyaan_id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pertanyaan_id)
    {
        $request['pertanyaan_id'] = $pertanyaan_id;
        return Jawaban::deleted($pertanyaan_id);
    }
}
