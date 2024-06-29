@extends('master')

@section('title', 'Tambah Pasien')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Pasien</h3>
        </div>

        <form action="{{ route('pasien.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Pasien" name="nama"
                                autofocus>
                            @error('nama')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select class="form-control select2" name="gender">
                                <option value="Pilih Jenis Kelamin" disabled selected>Pilih Jenis Kelamin</option>
                                @foreach ($gender as $item)
                                    <option value="{{ $item->kelamin }}">{{ $item->kelamin }}</option>
                                @endforeach
                            </select>
                            @error('gender')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="status">Status Perkawinan</label>
                            <select class="form-control select2" name="status">
                                <option value="Pilih Status Perkawinan" disabled selected>Pilih Status Perkawinan</option>
                                @foreach ($marital as $item)
                                    <option value="{{ $item->status }}">{{ $item->status }}</option>
                                @endforeach
                            </select>
                            @error('status')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-6">
                        <div class="form-group">
                            <label for="lahir">Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control" placeholder="Masukkan Tempat, Tanggal Lahir"
                                name="lahir">
                            @error('lahir')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="alamat">Alamat Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan Alamat Lengkap" name="alamat">
                            @error('alamat')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
@endsection
