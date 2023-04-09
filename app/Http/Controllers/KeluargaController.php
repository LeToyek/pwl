<?php

namespace App\Http\Controllers;


use App\Models\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    //
    function index(){
        $data = Keluarga::all();
        return view("keluarga.keluarga")->with("keluarga",$data);
    }
    public function create()
    {
        //
        return view("keluarga.create_keluarga")->with("url_form",url("/keluarga"));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required|string|max:50',
            'hubungan'=>'required|string|max:30',
            'jk'=>'required|in:L,P',
            'pekerjaan'=>'required|string|max:50',
            'alamat'=>'required|string|max:100',
            'tanggal_lahir'=>'required|date',
        ]);
        $data = Keluarga::create($request->except(['_token']));

        return redirect('keluarga')
            ->with('success','Keluarga berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluarga  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Keluarga $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluarga  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $keluarga = Keluarga::find($id);
        return view('keluarga.create_keluarga',[
            "keluarga" => $keluarga,
            "url_form" => url("./keluarga/".$id)
        ]);
    }

    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'nama'=>'required|string|max:50,'.$id,
            'hubungan'=>'required|string|max:30',
            'jk'=>'required|in:L,P',
            'pekerjaan'=>'required|string|max:50',
            'alamat'=>'required|string|max:100',
            'tanggal_lahir'=>'required|date',
        ]);
        $data = Keluarga::where("id","=",$id)->update($request->except(["_token","_method"]));
        return redirect("keluarga")->with("success","Keluarga Berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluarga  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Keluarga::where("id","=",$id)->delete();
        return redirect("keluarga")->with("success","Keluarga Berhasil dihapus");
    }
}
