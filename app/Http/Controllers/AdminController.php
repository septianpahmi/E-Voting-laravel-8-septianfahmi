<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tb_kelas;
use App\Models\Tb_pilih;
use App\Models\Tb_kandidat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        $data = User::all();
        return view('master', compact('data'));
    }
    function dptdelete($id){
        $data = User::find($id);
        $data -> delete();
        return redirect('/pemilsos');
    }
    function deleteall(){
        User::where('level', 'user')->delete();
        return redirect('/pemilsos');
    }

    function datakelas(){
        $data = Tb_kelas::all();
        return view('datakelas',compact('data'));
    }
    function adddatakelas(Request $request){
        $data = new Tb_kelas;
        $data->nm_kelas = $request->nm_kelas;
        $data->save();
        return redirect()->back();
    }
    function deldatakelas($id){
        $data = Tb_kelas::find($id);
        $data->delete();
        return redirect()->back();
    }

    function datacalon(){
        $data = Tb_kandidat::all();
        return view('datacalon', compact('data'));
    }
    function adddatacalon(Request $request){
        $data = new Tb_kandidat;
        $data->nisn = $request->nisn;
        $data->nm_kandidat = $request->nm_kandidat;
        $data->nomor = $request->nomor;
        $data->visi = $request->visi;
        $data->misi = $request->misi;
        $photo=$request->file('photo');
        if($photo){
            $photoname=time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('kandidat'), $photoname);
            $data->photo=$photoname;
        }
        $data->save();
        return redirect()->back();
    }
    function postdatacalon(Request $request, $id){
        $data = Tb_kandidat::find($id);
        $data->nisn = $request->nisn;
        $data->nm_kandidat = $request->nm_kandidat;
        $data->nomor = $request->nomor;
        $data->visi = $request->visi;
        $data->misi = $request->misi;
        $photo=$request->file('photo');
        if($photo){
            $photoname=time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('kandidat'), $photoname);
            $data->photo=$photoname;
        }
        $data->save();
        return redirect('/pemilsos/datacalon');
    }

    function editdatacalon($id){
        $data = Tb_kandidat::find($id);
        return view('editcalon', compact('data'));
    }
    function deldatacalon($id){
        $data = Tb_kandidat::find($id);
        $data->delete();
        return redirect()->back();
    }
    function datadpt(){
        $data = Tb_kelas::all();
        return view('datadpt', compact('data'));
    }
    function adddatadpt(Request $request){
        $data = new User;
        $data->nisn = $request->nisn;
        $data->nama = $request->nama;
        $data->jeniskelamin = $request->jeniskelamin;
        $data->kelas = $request->kelas;
        $data->password = bcrypt ($request->password);
        $data->save();
        return redirect()->back();
    }

    function hasilvote(){
        $totaldpt = User::count();
        $dptmemilih = Tb_pilih::count();
        $tdkmemilih = $totaldpt - $dptmemilih;
        $data = Tb_kandidat::all();
        return view('hasilvote', ['totaldpt'=>$totaldpt, 'dptmemilih'=>$dptmemilih, 'data'=>$data, 'tdkmemilih'=>$tdkmemilih]);
    }
    // function countdpt(){
    //     $count = User::all();
    //     return view('hasilvote', compact('count'));
    // }

    function daftarhadir(){
        $totaldpt = User::count();
        $dptmemilih = Tb_pilih::count();
        $tdkmemilih = $totaldpt - $dptmemilih;
        $data = User::all();
        return view('daftarhadir', ['totaldpt'=>$totaldpt, 'dptmemilih'=>$dptmemilih, 'data'=>$data, 'tdkmemilih'=>$tdkmemilih]);
    }

    //user

    function pemilsosuser(){
        $data = Tb_kandidat::all();
        return view('vote', compact('data'));
    }

    function gagal(){
        return view('gagal');
    }
    function success(){
        return view('succes');
    }

}
