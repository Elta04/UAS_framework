@extends('master')

@section('title', 'Ubah Pasien')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Pasien</h3>
        </div>

        <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Pasien" name="nama"
                                value="{{ $pasien->nama }}">
                            @error('nama')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select class="form-control select2" name="gender">
                                <option value="">Pilih Jenis Kelamin</option>
                                @foreach ($gender as $item)
                                    <option {{ $pasien->gender == $item->kelamin ? 'selected' : '' }}
                                        value="{{ $item->kelamin }}">{{ $item->kelamin }}</option>
                                @endforeach
                            </select>
                            @error('gender')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="lahir">Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control" placeholder="Masukkan Tempat, Tanggal Lahir"
                                name="lahir" value="{{ $pasien->lahir }}">
                            @error('lahir')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="status">Status Perkawinan</label>
                            <input type="text" class="form-control" placeholder="Masukkan Status Perkawinan"
                                name="status" value="{{ $pasien->status }}">
                            @error('status')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="form-group">
                            <label for="alamat">Alamat Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan Alamat Lengkap" name="alamat"
                                value="{{ $pasien->alamat }}">
                            @error('alamat')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
@endsection
