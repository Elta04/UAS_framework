@extends('master')

@section('title', 'Ubah Nama Unit')

@section('content')
    <div class="col-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ubah Data Nama Unit</h3>
            </div>

            <form action="{{ route('unit.update', $unit->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label for="unit">Nama Unit</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Unit" name="unit"
                            value="{{ $unit->unit }}">
                        @error('unit')
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
