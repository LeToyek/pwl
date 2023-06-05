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
                        <h1>Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Default box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Daftar Mahasiswa 👩‍🎓</h3>

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
                    {{-- <a href="{{ url('mahasiswa/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a> --}}
                    <button class="btn btn-sm btn-success my-2" data-toggle="modal" data-target="#modal_mahasiswa">Tambah
                        Data</button>
                    <table class="table table-bordered table-striped" id="data_mahasiswa">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Nama Kelas</th>
                                <th>JK</th>
                                <th>HP</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Pemrograman Web Lanjut
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswa"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Mahasiswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-message"></div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nim" name="nim"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <select name="kelas_id" id="kelas_id" class="form-control form-control-sm">
                                    @foreach ($kelas as $kelas)
                                        <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="jk" name="jk"
                                    value="" />
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="tempat_lahir"
                                    name="tempat_lahir" value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="tanggal_lahir"
                                    name="tanggal_lahir" value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="alamat" name="alamat"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="hp" name="hp"
                                    value="" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="exampleModalLabel">Detail Mahasiswa</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3"><b>Nama: </b></div>
                        <div class="col-8"><span id="nama_detail"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>NIM: </b></div>
                        <div class="col-8"><span id="nim_detail"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>Jenis Kelamin: </b></div>
                        <div class="col-8"><span id="jk_detail"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>Tempat Lahir: </b></div>
                        <div class="col-8"><span id="tempat_lahir_detail"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>Tanggal Lahir: </b></div>
                        <div class="col-8"><span id="tanggal_lahir_detail"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>Alamat: </b></div>
                        <div class="col-8"><span id="alamat_detail"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>HP: </b></div>
                        <div class="col-8"><span id="hp_detail"></span></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_js')
    <script>
        function updateData(th) {
            $('#modal_mahasiswa').modal('show');
            $('#modal_mahasiswa .modal-title').html('Edit Data Mahasiswa');
            $('#modal_mahasiswa #nim').val($(th).data('nim'));
            $('#modal_mahasiswa #nama').val($(th).data('nama'));
            $('#modal_mahasiswa #jk').val($(th).data('jk'));
            $('#modal_mahasiswa #tempat_lahir').val($(th).data('tempat_lahir'));
            $('#modal_mahasiswa #kelas').val($(th).data('kelas_id'));
            $('#modal_mahasiswa #tanggal_lahir').val($(th).data('tanggal_lahir'));
            $('#modal_mahasiswa #alamat').val($(th).data('alamat'));
            $('#modal_mahasiswa #hp').val($(th).data('hp'));
            $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
            $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
        }

        function showData(th) {
            $('#detail').modal('show');
            $('#detail #nim_detail').html($(th).data('nim'));
            $('#detail #nama_detail').html($(th).data('nama'));
            $('#detail #jk_detail').html($(th).data('jk'));
            $('#detail #kelas_detail').html($(th).data('kelas'));
            $('#detail #tempat_lahir_detail').html($(th).data('tempat_lahir'));
            $('#detail #tanggal_lahir_detail').html($(th).data('tanggal_lahir'));
            $('#detail #alamat_detail').html($(th).data('alamat'));
            $('#detail #hp_detail').html($(th).data('hp'));
        }

        function deleteData(th) {
            var url = $(th).data('url');
            var c = confirm('Apakah anda yakin ingin menghapus data ini?');
            if (c) {
                $.ajax({
                    url: url,
                    method: "POST",
                    data: {
                        _method: 'DELETE',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.status) {
                            alert(data.message);
                            dataMahasiswa.ajax.reload();
                        } else {
                            alert(data.message);
                        }
                    }
                });
            }
        }

        $(document).ready(function() {
            var dataMahasiswa = $('#data_mahasiswa').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': '{{ url('mahasiswa/data') }}',
                    'dataType': 'json',
                    'type': 'POST',
                },
                columns: [{
                        data: 'nomor',
                        name: 'nomor',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'nim',
                        name: 'nim',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'kelas.nama_kelas',
                        name: 'kelas.nama_kelas',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'jk',
                        name: 'jk',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'hp',
                        name: 'hp',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'id',
                        name: 'id',
                        sortable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            console.log(`row`, row);
                            console.log('data', data);

                            var btn = `<div class="row">
        <div class="col d-flex justify-content-center"">
            <button data-url="{{ url('/mahasiswa') }}/` + data +
                                `" class="btn btn-xs btn-warning" onclick="updateData(this)" data-id="` +
                                row.id + `" data-nim="` + row.nim + `" data-nama="` + row.nama +
                                `" data-jk="` + row.jk + `" data-tempat_lahir="` + row
                                .tempat_lahir + `" data-tanggal_lahir="` + row.tanggal_lahir +
                                `" data-alamat="` + row.alamat + `" data-kelas="` + row.kelas_id +
                                `" data-hp="` + row.hp + `" data-kelas="` + row.kelas_id +
                                `" data-kelas="` + row.kelas
                                .nama_kelas +
                                `"><i class="fa fa-edit"></i> Edit</button>
        </div>
        <div class="col d-flex justify-content-center">
                                        <button class="btn btn-xs btn-info" onclick="showData(this)" data-target="#detail" data-nim="` +
                                row
                                .nim + `" data-nama="` + row.nama +
                                `" data-jk="` + row.jk + `" data-tempat_lahir="` + row
                                .tempat_lahir + `" data-tanggal_lahir="` + row.tanggal_lahir +
                                `" data-alamat="` + row.alamat +
                                `" data-hp="` + row.hp + `"><i class="fa fa-list"></i> Detail</button>
        </div>
        <div class="col d-flex justify-content-center">
            <button onclick="deleteData(this)" class="btn btn-xs btn-danger" data-url="{{ url('/mahasiswa') }}/${data}">
                <i class="fa fa-trash"></i> Hapus
            </button>
        </div>
    </div>`;
                            return btn;
                        }
                    },
                ]
            });
            $('#form_mahasiswa').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('.form-message').html('');
                        if (data.status) {
                            $('.form-message').html(
                                '<span class="alert alert-success" style="width: 100%">' +
                                data.message + '</span>');
                            $('#form_mahasiswa')[0].reset();
                            dataMahasiswa.ajax.reload();
                            $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                            $('#form_mahasiswa').find('input[name="_method"]').remove();
                        } else {
                            $('.form-message').html(
                                '<span class="alert alert-danger" style="width: 100%">' +
                                data.message + '</span>');
                            alert('error');
                        }

                        if (data.modal_close) {
                            $('.form-message').html('');
                            $('#modal_mahasiswa').modal('hide');
                        }
                    }
                });
            });
        });
    </script>
@endpush
