<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Peserta::where('nama', 'LIKE', '%'. $request->search. '%')->paginate(5);
        }else{
            $data = Peserta::paginate(5);
        }
        return view('datapeserta', compact('data'));
    }

    public function tambahpeserta(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        Peserta::create($request->all());
        return redirect()->route('crud')->with('success', 'Data Berhasil ditambahkan');
    }

    public function tampilandata($id){
        $data = Peserta::find($id);
        return view('editdata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Peserta::find($id);
        $data->update($request->all());
        return redirect()->route('crud')->with('success', 'Data Berhasil di Update');

    }

    public function deletedata($id){
        $data = Peserta::find($id);
        $data->delete();
        return redirect()->route('crud')->with('success', 'Data Berhasil di delete');

    }
}
