@extends('layouts.template', ['title' => 'matkul'])
@section('content')
    @push('custom_css')
        <style>
            h1 {
                font-weight: bold;
            }
            .asek{
                animation: dugem;
                transition: .2s ease-in
            }

            @keyframes dugem {
                0%  {
                    background-color: blue
                }
                50% {
                    background-color: brown
                }
                100% {
                    background-color: aquamarine
                }
            }
        </style>
    @endpush
    <div class="content-wrapper pb-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mata Kuliah</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Mata Kuliah</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content asek">

            <!-- Default box -->
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">📜 Data Mata Kuliah</h3>

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
                                    <th scope="col">Semester</th>
                                    <th scope="col">SKS</th>
                                    <th scope="col">Dosen</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                @foreach ($matkuls as $no => $mk)
                                    <tr class="">
                                        <td scope="row">{{ $no + 1 }}</td>
                                        <td>{{ $mk->nama }}</td>
                                        <td>{{ $mk->semester }}</td>
                                        <td>{{ $mk->sks }}</td>
                                        <td>{{ $mk->dosen }}</td>
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
