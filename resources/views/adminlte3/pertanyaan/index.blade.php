@extends('adminlte3.master')

@section('content')
<div class="container">
<h2>list Pertanyaan</h2>
<a href="/pertanyaan/create" class="badge badge-info">Buat Pertanyaan</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nama</th>
            <th scope="col">judul</th>
            <th scope="col">isi pertanyaan</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($isi as $data)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->judul }}</td>
            <td>{{ $data->isi }}</td>
            <td><a href="/jawaban/{{ $data->id }}" class="badge badge-info">jawab</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>

</div>
@endsection