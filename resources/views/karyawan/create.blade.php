@extends('master')

@section('title', 'Tambah Karyawan')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Karyawan</h3>
        </div>

        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" placeholder="Masukkan NIK" name="nik" autofocus>
                            @error('nik')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Nama Karyawan</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Karyawan" name="nama">
                            @error('nama')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-3">
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
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="unit">Unit</label>
                            <select class="form-control select2" name="unit">
                                <option value="Pilih Unit" disabled selected>Pilih Unit</option>
                                @foreach ($unit as $item)
                                    <option value="{{ $item->unit }}">{{ $item->unit }}</option>
                                @endforeach
                            </select>
                            @error('unit')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat">
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
