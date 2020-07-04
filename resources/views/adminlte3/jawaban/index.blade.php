@extends('adminlte3.master')

@section('content')
<div class="container">
  <h2>kolom jawaban</h2>
  <hr>
        <form action="/jawaban/{{ $pertanyaan[0]->id }}" method="POST">
            @csrf
            @foreach ($pertanyaan as $item)
            <div class="form-group">
              <label for="exampleFormControlInput1">judul</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" value="{{ $item->judul }}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">isi pertanyaan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" value="{{ $item->isi }}" disabled>
            </div>
            @endforeach
                          
          
            <!-- buat input jawaban -->
            <div class="form-group">
              <label for="exampleFormControlInput1">jawaban</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan jawaban" name="isi">
            </div>

            <button type="submit" class="btn btn-primary">kirim</button>
            <a href="/pertanyaan" class="btn btn-danger">kembali</a>
        </form>
      </div>
@endsection