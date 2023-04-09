<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    //
    function index(){
        $data = MataKuliah::all();
        return view("matkul.mata_kuliah")->with("matkuls",$data);
    }
    public function create()
    {
        //
        return view("matkul.create_matakuliah")->with("url_form",url("/mata_kuliah"));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required|string|max:50',
            'semester'=>'required|integer|min:1|max:10',
            'sks'=>'required|integer|min:1|max:10',
            'dosen'=>'required|string|max:50',
        ]);
        $data = MataKuliah::create($request->except(['_token']));

        return redirect('mata_kuliah')
            ->with('success','Mata Kuliah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliah $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $matkul = MataKuliah::find($id);
        return view('matkul.create_matakuliah',[
            "matkul" => $matkul,
            "url_form" => url("./mata_kuliah/".$id)
        ]);
    }

    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'nama'=>'required|string|max:50,'.$id,
            'semester'=>'required|integer|min:1|max:10',
            'sks'=>'required|integer|min:1|max:10',
            'dosen'=>'required|string|max:50',
        ]);
        $data = MataKuliah::where("id","=",$id)->update($request->except(["_token","_method"]));
        return redirect("mata_kuliah")->with("success","Mata Kuliah Berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataKuliah  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        MataKuliah::where("id","=",$id)->delete();
        return redirect("mata_kuliah")->with("success","Mata Kuliah Berhasil dihapus");
    }
}
