@extends('adminlte3.master')

@section('content')
        <div class="container">
          <h2>Buat Pertanyaan</h2>
          <hr>
            <form action="/pertanyaan" method="POST">
                @csrf
                <div class="form-group">
                        <label for="exampleFormControlInput1">nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan nama" name="nama">
                      </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">judul</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" name="judul">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">isi</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi" placeholder="masukkan pertanyaan yang ingin anda sampaikan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">kirim</button>
                <a href="/pertanyaan" class="btn btn-danger">kembali</a>
            </form>
        </div>
@endsection