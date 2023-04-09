<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    //
    function index(){
        $data = Hobi::all();
        return view("hobi.hobi")->with("hobbies",$data);
    }

    public function create()
    {
        //
        return view("hobi.create_hobi")->with("url_form",url("/hobi"));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required|string|max:50',
        ]);
        $data = Hobi::create($request->except(['_token']));

        return redirect('hobi')
            ->with('success','Hobi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hobi  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Hobi $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hobi  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $hobi = Hobi::find($id);
        return view('hobi.create_hobi',[
            "hobi" => $hobi,
            "url_form" => url("./hobi/".$id)
        ]);
    }

    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'nama'=>'required|string|max:50,'.$id,
        ]);
        $data = Hobi::where("id","=",$id)->update($request->except(["_token","_method"]));
        return redirect("hobi")->with("success","Hobi Berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hobi  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Hobi::where("id","=",$id)->delete();
        return redirect("hobi")->with("success","Hobi Berhasil dihapus");
    }
}
