@extends('master')

@section('title', 'Ubah Status')

@section('content')
    <div class="col-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ubah Data Status</h3>
            </div>

            <form action="{{ route('marital.update', $marital->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label for="status">Status Perkawinan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Status Perkawinan" name="status"
                            value="{{ $marital->status }}">
                        @error('status')
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
