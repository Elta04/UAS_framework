@extends('master')

@section('title', 'Ubah Jenis Kelamin')

@section('content')
    <div class="col-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ubah Data Jenis Kelamin</h3>
            </div>

            <form action="{{ route('gender.update', $gender->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jenis Kelamin" name="kelamin"
                            value="{{ $gender->kelamin }}">
                        @error('gender')
                            <p class="badge badge-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-8">
    </div>
@endsection
