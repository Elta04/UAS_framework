@extends('master')

@section('title', 'Tambah Dokter')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Dokter</h3>
        </div>

        <form action="{{ route('dokter.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="nama">Nama Dokter</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Dokter" name="nama"
                                autofocus>
                            @error('nama')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="spesialis">Spesialis</label>
                            <select class="form-control select2" name="spesialis">
                                <option value="Pilih Spesialis" disabled selected>Pilih Spesialis</option>
                                @foreach ($spesialis as $item)
                                    <option value="{{ $item->spesialis }}">{{ $item->spesialis }}</option>
                                @endforeach
                            </select>
                            @error('spesialis')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="praktek">Jadwal Praktek</label>
                            <select class="form-control select2" name="praktek">
                                <option value="Pilih Jadwal Praktek" disabled selected>Pilih Jadwal Praktek</option>
                                @foreach ($praktek as $item)
                                    <option value="{{ $item->hari }}">{{ $item->hari }}</option>
                                @endforeach
                            </select>
                            @error('praktek')
                                <p class="badge badge-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="telepon">Nomor Telepon</label>
                            <input type="number" class="form-control" placeholder="Masukkan Nomor Telepon" name="telepon">
                            @error('telepon')
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
