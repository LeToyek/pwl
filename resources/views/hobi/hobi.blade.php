@extends('layouts.template', ['title' => 'hobi'])
@section('content')
    @push('custom_css')
        <style>
            h1 {
                font-weight: bold;
            }
        </style>
    @endpush
    <div class="content-wrapper pb-1">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hobi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Hobi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content ">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Default box -->
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">🎨 Data Hobi </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{ url('hobi/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($hobbies as $no => $hobby)
                                    <tr class="">
                                        <td scope="row">{{ $no + 1 }}</td>
                                        <td >{{ $hobby->nama }}</td>
                                        <td>
                                            <div class="row justify-content-center">
                                                <a href="{{ url('/hobi/' . $hobby->id . '/edit') }}"
                                                    class="btn btn-sm btn-warning mr-2">edit</a>

                                                <form method="POST" action="{{ url('/hobi/' . $hobby->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer bg-white border-top d-flex justify-content-center">
                    Saya 💖 Pemrograman Web Lanjut
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('custom_js')
    <script>
    </script>
@endpush
