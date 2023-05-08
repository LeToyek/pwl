@extends('layouts.template', ['title' => 'mahasiswa'])
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
                        <h1>Kartu Hasil Studi (KHS)</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Articles</li>
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
                    <h3 class="card-title">Kartu Hasil Studi</h3>
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
                            <div class="col-8 d-flex">
                                <h6 class="col-2">Nama</h6>
                                <h6 class="col-1">:</h6>
                                <h6 class="col-4">{{ $mahasiswa->nama }}</h6>
                            </div>
                            <div class="col-8 d-flex">
                                <h6 class="col-2">Nim</h6>
                                <h6 class="col-1">:</h6>
                                <h6 class="col-4">{{ $mahasiswa->nim }}</h6>
                            </div>
                            <div class="col-8 d-flex">
                                <h6 class="col-2">Kelas</h6>
                                <h6 class="col-1">:</h6>
                                <h6 class="col-4">{{ $mahasiswa->kelas->nama_kelas }}</h6>
                            </div>
                            <thead>
                            <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Mata Kuliah</th>
                                    <th scope="col">SKS</th>
                                    <th scope="col">Jam</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa->matakuliahs as $no => $d)
                                
                                    <tr class="">
                                        <td>{{ $loop->iteration }}</td>
                                        <td >{{ $d->nama_matkul }}</td>
                                        <td>{{ $d->sks}}</td>
                                        <td>{{ $d->jam }}</td>
                                        <td>{{ $d->semester }}</td>
                                        <td>{{ $d->pivot->nilai }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.card-body -->
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
    <script>
    </script>
@endpush
