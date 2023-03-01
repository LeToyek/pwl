@extends('layouts.template', ['title' => 'college'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pengalaman Kuliah</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pengalaman Kuliah</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Pengalaman Kuliah</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class=" card-body">
                    <p>

                        Saya, Maulana Arif Wijaya, merasa sangat senang dan terbantu dengan pengalaman kuliah di Politeknik
                        Negeri Malang, terutama dalam mata kuliah pemrograman web lanjut yang diajarkan oleh Pak Zawarudin.
                        Mata kuliah ini sangat menantang dan membutuhkan keterampilan teknis yang kuat, namun Pak Zawarudin
                        dengan penuh kesabaran membantu kami memahami konsep-konsep yang sulit dengan cara yang mudah
                        dimengerti. Beliau juga sering memberikan proyek nyata dari industri yang sangat membantu untuk
                        memperdalam pemahaman kami.
                    </p>
                    <p>

                        Selain itu, Politeknik Negeri Malang memiliki lingkungan akademik yang sangat baik dengan fasilitas
                        yang lengkap dan modern. Kampus ini juga memiliki banyak organisasi mahasiswa yang aktif, yang
                        membantu kami untuk memperoleh pengalaman tambahan dan pengembangan keterampilan sosial dan
                        kepemimpinan.
                    </p>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    College
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
