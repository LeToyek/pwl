@extends('layouts.template',["title" => "beranda"])
@section('content')
@push('custom_css')
    <style>
      h1{
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
          <h1>Beranda</h1>
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
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Beranda Mawl</h3>
        
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
        Halo Semua! aku Maulana 👋 
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
      alert("Selamat Datang")
    </script>
@endpush