@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CRUD</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <a href="/tambahpeserta" class="btn btn-primary">Tambah</a>
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <form action="/crud" method="GET">
                    <input type="search" id="inputPassword6" name="search" class="form-control"
                        aria-describedby="passwordHelpInline">
                </form>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nik</th>
                            <th scope="col">No tlp</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($data as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + $data->firstItem() }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jeniskelamin }}</td>
                                <td>{{ $row->asalsekolah }}</td>
                                <td>{{ $row->kelas }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->nik }}</td>
                                <td>0{{ $row->notlp }}</td>
                                <td>
                                    <a href="/tampilandata/{{ $row->id }}" class="btn btn-warning">edit</a>
                                    <a href="/deletedata/{{ $row->id }}" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
    </div>
</div>


































@endsection
