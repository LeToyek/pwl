@extends('layouts.template', ['title' => 'keluarga'])
@section('content')
    @push('custom_css')
        <style>
            h1 {
                font-weight: bold;
            }
        </style>
    @endpush
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Keluarga<h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">/ Keluarga<li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Default box -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">😀 Data Keluarga </h3>

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
                    <a href="{{ url('keluarga/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Hubungan</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                @foreach ($keluarga as $no => $k)
                                    <tr class="">
                                        <td scope="row">{{ $no + 1 }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>{{ $k->hubungan }}</td>
                                        <td>{{ $k->jk }}</td>
                                        <td>{{ $k->pekerjaan }}</td>
                                        <td>{{ $k->alamat }}</td>
                                        <td>{{ $k->tanggal_lahir }}</td>
                                        <td>
                                            <div class="row justify-content-center">
                                                <a href="{{ url('/keluarga/' . $k->id . '/edit') }}"
                                                    class="btn btn-sm btn-warning mr-2">edit</a>

                                                <form method="POST" action="{{ url('/keluarga/' . $k->id) }}">
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
                <div class="card-footer">
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
