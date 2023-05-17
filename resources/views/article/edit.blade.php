@extends('layouts.template', ['title' => 'article'])
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
                        <h1>Artikel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Artikel</li>
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
                    <h3 class="card-title">📰 Artikel Data</h3>

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


                    <form action="/articles/{{ $article->id }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="title">Title </label>
                            <input type="text" value="{{ $article->title }}" class="form-control" required="required" name="title"></br>
                            <label for="title">Author </label>
                            <input type="text" value="{{ $article->author }}" class="form-control" required="required" name="author"></br>
                            <label for="content">Content </label>
                            <input type="text" value="{{ $article->content }}" class="form-control" required="required" name="content"></input></br>
                            <div class="form-group">
                                <label for="image">Feature Image</label>
                                <input type="file" class="form-control" required name="image"
                                    value="{{ $article->featured_image }}" /><br>
                                <img src="{{ asset('storage/' . $article->featured_image) }}" width="150px">
                            </div>
                            <label for="title">Category </label>
                            <input type="text" value="{{ $article->category }}" class="form-control" required="required" name="category"></br>
                            <label for="title">Tahun Terbit </label>
                            <input type="text" value="{{ $article->tahun_terbit }}" class="form-control" required="required" name="tahun_terbit"></br>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>

                </div>
                <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('custom_js')
    <script></script>
@endpush
