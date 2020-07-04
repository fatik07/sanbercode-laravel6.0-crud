@extends('adminlte3.master')

@section('content')
<div class="container">
  <h2>Edit Pertanyaan</h2>
  <hr>
  <form action="/jawaban/{{ $pertanyaan[0]->id }}" method="post">
    @csrf
    @method('PUT')
            @foreach ($pertanyaan as $item)
            <div class="form-group">
                    <label for="exampleFormControlInput1">nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" value="{{ $item->nama }}" name="nama">
                  </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">judul</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" value="{{ $item->judul }}" name="judul">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">isi pertanyaan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" value="{{ $item->isi }}" name="isi_pertanyaan">
            </div>
            @endforeach
              
            <button class="btn btn-primary">update</button>
            <a href="/pertanyaan" class="btn btn-danger">kembali</a>
        </form>
        
</div>
@endsection