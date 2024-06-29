@extends('master')

@section('title', 'Tambah Unit')

@section('content')
    <div class="col-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Unit</h3>
            </div>

            <form action="{{ route('unit.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="unit">Nama Unit</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Unit" name="unit" autofocus>
                        @error('unit')
                            <p class="badge badge-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-8">
    </div>
@endsection
