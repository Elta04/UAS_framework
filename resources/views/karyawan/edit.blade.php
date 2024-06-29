@extends('master')

@section('title', 'Ubah Karyawan')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah Karyawan</h3>
        </div>

        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" name="nik" value="{{ $karyawan->nik }}">
                            @error('nik')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Nama Karyawan</label>
                            <input type="text" class="form-control" name="nama" value="{{ $karyawan->nama }}">
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
                                    <option {{ $karyawan->gender == $item->kelamin ? 'selected' : '' }}
                                        value="{{ $item->kelamin }}">{{ $item->kelamin }}</option>
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
                                    <option {{ $karyawan->unit == $item->unit ? 'selected' : '' }}
                                        value="{{ $item->unit }}">{{ $item->unit }}</option>
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
                            <input type="text" class="form-control" name="alamat" value="{{ $karyawan->alamat }}">
                            @error('alamat')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </form>
    </div>
@endsection
