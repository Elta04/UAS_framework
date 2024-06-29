@extends('master')

@section('title', 'Tambah Status')

@section('content')
    <div class="col-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Status</h3>
            </div>

            <form action="{{ route('marital.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="status">Status Perkawinan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Status Perkawinan" name="status"
                            autofocus>
                        @error('status')
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
