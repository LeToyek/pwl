@extends('layouts.template', ['title' => 'matkul'])
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

                    <form method="POST" action="{{ $url_form }}">
                        @csrf
                        {!! isset($matkul) ? method_field('PUT') : ""!!}

                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control @error('nama') is-invalid @enderror"
                                value="{{ isset($matkul) ? $matkul->nama : old('nama') }}" name="nama" type="text" />
                            @error('nama')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Semester</label>
                            <input class="form-control @error('semester') is-invalid @enderror"
                                value="{{ isset($matkul) ? $matkul->semester : old('semester') }}" name="semester" type="text" />
                            @error('semester')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>SKS</label>
                            <input class="form-control @error('sks') is-invalid @enderror"
                                value="{{ isset($matkul) ? $matkul->sks : old('sks') }}" name="sks" type="text" />
                            @error('sks')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Dosen</label>
                            <input class="form-control @error('dosen') is-invalid @enderror"
                                value="{{ isset($matkul) ? $matkul->dosen : old('dosen') }}" name="dosen" type="text" />
                            @error('dosen')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>

                        
                        <button type="submit" class="btn btn-info">Simpan</button>
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
