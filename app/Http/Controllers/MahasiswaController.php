<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mahasiswa = MahasiswaModel::with('kelas')->get();
        $paginate = MahasiswaModel::orderBy('nim', 'asc')->paginate(3);
        return view('mahasiswa.mahasiswa', [
            'mahasiswa' => $mahasiswa,
            'paginate' => $paginate
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kelas = Kelas::all();
        return view("mahasiswa.create_mahasiswa", [
            "kelas" => $kelas,
            "url_form" => url("/mahasiswa")
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->file('image')) {
            
            $image_name = $request->file('image')->store('images', 'public');
        }
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15'
        ]);
        
        $data = new MahasiswaModel();
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->jk = $request->jk;
        $data->foto = $image_name;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->hp = $request->hp;
        $data->kelas_id = $request->kelas_id;

        $data->save(); 

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($nim)
    {
        //
        $mahasiswa = MahasiswaModel::with('kelas')->where('nim', $nim)->first();
        return view('mahasiswa.detail', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = Kelas::all();
        return view('mahasiswa.edit', [
            "mhs" => $mahasiswa,
            'kelas' => $kelas,
            "url_form" => url("./mahasiswa/" . $id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,' . $id,
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15'
        ]);

        $data = MahasiswaModel::where("id", "=", $id)->first();
        if ($data->foto && file_exists(storage_path('app/public/' . $data->foto))) {
            # code...
            \Storage::delete('public/' . $data->logo);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $data->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'foto' => $image_name,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'kelas_id' => $request->kelas_id
        ]);
        return redirect("mahasiswa")->with("success", "Mahasiswa Berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mhs = MahasiswaModel::where("id", "=", $id)->first();
        $mhs->matakuliahs()->detach();
        $mhs->delete();
        return redirect("mahasiswa")->with("success", "Mahasiswa Berhasil dihapus");
    }
}
