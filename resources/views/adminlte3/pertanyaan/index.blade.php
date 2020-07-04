@extends('adminlte3.master')

@section('content')
<div class="container">
<h2>list Pertanyaan</h2>
<a href="/pertanyaan/create" class="btn btn-primary mb-2">Buat Pertanyaan</a>

    <table class="table">
        <thead>
          <tr style="background-color:darkcyan">
            <th scope="col">#</th>
            <th scope="col">nama</th>
            <th scope="col">judul</th>
            <th scope="col">isi pertanyaan</th>
            <th style="text-align:center">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($isi as $data)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->judul }}</td>
            <td>{{ $data->isi }}</td>
            <td style="text-align:center">
              <a href="/jawaban/{{ $data->id }}" class="btn btn-sm badge badge-warning">jawab</a>
              <a href="/jawaban/{{ $data->id }}/show" class="btn btn-sm badge badge-info">lihat</a>
              <a href="/jawaban/{{ $data->id }}/edit" class="btn btn-sm badge badge-success">edit</a>

              <form action="/jawaban/{{ $data->id }}" method="post" style="display:inline">
                
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm badge badge-danger">delete</button>
              </form>
              
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>

</div>
@endsection