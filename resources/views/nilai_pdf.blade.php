<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Hasil Studi - {{ $mahasiswa->nama }}</title>

    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

    <style>
        .biodata-table {
            margin-bottom: 2rem;
        }

        .biodata-table th {
            text-align: left;
        }
    </style>
</head>

<body>
    <h3 style="margin-top: 20px;width: 100vw;text-align: center">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h3>
    <h2 class="mt-4 mb-3 text-center" style="text-align: center">KARTU HASIL STUDI (KHS)</h2>
    <div class="container">
        <table class="biodata-table">
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>NIM </th>
                <th>:</th>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th>Kelas </th>
                <th>:</th>
                <td>{{ $mahasiswa->kelas->nama_kelas }}</td>
            </tr>
        </table>
        <table class="table table-bordered" >
            <thead>
                <tr>
                    <td><b>Mata Kuliah</b></td>
                    <td><b>SKS</b></td>
                    <td><b>Semester</b></td>
                    <td><b>Nilai</b></td>
                </tr>
            </thead>
            <tbody>  
                @foreach ($mahasiswa->matakuliahs as  $matakuliah)
                <tr>
                        <td>{{  $matakuliah->nama_matkul }}</td>
                        <td>{{  $matakuliah->sks }}</td>
                        <td>{{  $matakuliah->semester }}</td>
                        <td>{{  $matakuliah->pivot->nilai }}</td>
                    </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>
