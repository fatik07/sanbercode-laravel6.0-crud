@extends('adminlte3.master')

@section('content')
<div class="container">
        <form action="/jawaban/{{ $pertanyaan[0]->id }}" method="POST">
            @csrf
            @foreach ($pertanyaan as $item)
            
            <div class="form-group">
                    <label for="exampleFormControlInput1">nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan nama" name="nama" value="{{ $item->nama }}" disabled>
                  </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">judul</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" name="judul" value="{{ $item->judul }}" disabled>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlInput1">isi pertanyaan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" name="isi" value="{{ $item->isi }}" disabled>
                  </div>
                  <div class="form-group">
                        <label for="exampleFormControlInput1">jawaban</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan jawaban" name="jawaban">
                      </div>
            <button type="submit" class="btn btn-primary">kirim</button>
            @endforeach
        </form>
    </div>
@endsection