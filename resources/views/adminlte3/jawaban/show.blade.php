@extends('adminlte3.master')

@section('content')
<div class="container">
  <h2>kolom jawaban</h2>
  <hr>
        <form>
            @foreach ($pertanyaan as $item)
            <div class="form-group">
                    <label for="exampleFormControlInput1">nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" value="{{ $item->nama }}" name="nama" disabled>
                  </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">judul</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" value="{{ $item->judul }}" name="judul" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">isi pertanyaan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" value="{{ $item->isi }}" name="isi_pertanyaan" disabled>
            </div>
            @endforeach
                          
            <div class="form-group ml-5">
                @foreach ($jawaban as $item) 
                <label for="exampleFormControlInput1">jawaban {{ $loop->iteration }}</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan jawaban" name="isi" value="{{ $item->isi }}" disabled>
                @endforeach
            </div>
            <a href="/pertanyaan" class="btn btn-danger">kembali</a>
        </form>
        
</div>
@endsection