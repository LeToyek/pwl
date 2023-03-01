@extends('layouts.template', ['title' => 'profile'])

@section('content')
    <div class="content-wrapper pb-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-primary col-md-5 mx-auto card-outline" style="display: block">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ $img_link }}"
                            alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">{{ $nama }}</h3>
                    <div class="text-muted text-center"><b>{{ $main_desc }}</b></div>
                    <p class="text-muted text-center">{{ $sec_desc }}</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NIM</b> <a class="float-right">{{ $nim }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Prodi</b> <a class="float-right">{{ $prodi }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kelas</b> <a class="float-right">{{ $kelas }}</a>
                        </li>
                    </ul>

                    <a href="https://www.linkedin.com/in/maulana-arif/" class="btn btn-primary btn-block"
                        style="display: flex; align-items: center; justify-content: center"><i class="fab fa-linkedin"
                            style="font-size: 24px"></i><div style="width: 8px"></div> <b> Follow me on Linkedin</b></a>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
