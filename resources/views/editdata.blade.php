@extends('layout.admin')

@section('content')

<body>
<br>
<br>
    <h1 class="text-center mb-5 mt-3">edit data Peserta</h1>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->nama }}">
                            </div>
                            <label for="exampleInputEmail1" class="form-label">Jenis kelamin</label>
                            <select class="form-select mb-2" name="jeniskelamin" aria-label="Default select example">
                                <option value="cowo">Cowo</option>
                                <option value="cewe">Cewe</option>
                            </select>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
                                <input type="text" name="asalsekolah" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->asalsekolah }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->kelas }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nik</label>
                                <input type="number" name="nik" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->nik }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                <input type="number" name="notlp" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->notlp }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            <a href="/crud" type="submit" class="btn btn-danger">kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


@endsection
