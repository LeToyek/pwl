@extends('layouts.template',['title'=>'mahasiswa'])
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
                        <h1>Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Mahasiswa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">📰 Mahasiswa Data</h3>

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

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">NIM: {{ $mahasiswa->nim }}</li>
                        <li class="list-group-item">Nama: {{ $mahasiswa->nama }}</li>
                        <li class="list-group-item">Kelas: {{ $mahasiswa->kelas->nama_kelas }}</li>
                        <li class="list-group-item">Tempat: {{ $mahasiswa->tempat_lahir}}</li>
                        <li class="list-group-item">Tanggal: {{ $mahasiswa->tanggal_lahir}}</li>
                        <li class="list-group-item">Jenis Kelamin: {{ $mahasiswa->jk }}</li>
                        <li class="list-group-item">Alamat: {{ $mahasiswa->alamat}}</li>
                        <li class="list-group-item">No HP: {{ $mahasiswa->hp}}</li>


                        
                    </ul>
                </div>


                <div class="card-footer">
                    saya 💖 Pemrograman Web Lanjut
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('custom_js')
    <script></script>
@endpush
