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
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Hubungan</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tanggal Lahir</th>
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
