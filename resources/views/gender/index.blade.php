@extends('master')

@section('title', 'Data Jenis Kelamin')

@section('content')
    <div class="card-body">
        <a href="{{ route('gender.create') }}" class="btn btn-primary mb-3">Tambah Jenis Kelamin</a>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>JENIS KELAMIN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gender as $no => $data)
                    <tr>
                        <input type="hidden" class="delete_id" value="{{ $data->id }}">
                        <td> {{ $no + 1 }} </td>
                        <td> {{ $data->kelamin }} </td>
                        <td>
                            <form action="{{ route('gender.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{ route('gender.edit', $data->id) }}" class="btn btn-sm btn-warning">Ubah</a>
                                <button class="btn btn-sm btn-danger btndelete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.btndelete').click(function(e) {
                e.preventDefault();

                var deleteid = $(this).closest("tr").find('.delete_id').val();

                swal({
                        title: "Apakah Anda Yakin?",
                        text: "Setelah dihapus, Anda tidak dapat memulihkan data ini lagi!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            var data = {
                                "_token": $('input[name=_token]').val(),
                                'id': deleteid,
                            };
                            $.ajax({
                                type: "DELETE",
                                url: 'gender/' + deleteid,
                                data: data,
                                success: function(response) {
                                    swal(response.status, {
                                            icon: "success",
                                        })
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
            });

        });
    </script>
@endsection
