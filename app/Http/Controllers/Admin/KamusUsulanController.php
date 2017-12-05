<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\KamusUsulanModel;
use App\Model\SKPDModel;
use App\Model\SatuanModel;
use App\Model\BidangUrusanModel;
use App\Model\SkoringModel;
use Auth;
class KamusUsulanController extends Controller
{
    public function viewKamusUsulan(){
    	$data = KamusUsulanModel::all();
    	return view('admin.admin.kamususulan.kamususulan',compact('data'));
    }

    public function viewAddKamusUsulan(){
    	$skpd = SKPDModel::all();
        $satuan = SatuanModel::all();
        $bidang = BidangUrusanModel::all();
        $skoring = SkoringModel::all();
        return view('admin.admin.kamususulan.addkamususulan',compact('skpd','satuan','bidang','skoring'));
    }
    public function postAddKamusUsulan(Request $request){
        $this->validate($request, [
            'tipe'              => 'required|numeric',
            'nm_pekerjaan'      => 'required',
            'harga'             => 'required',
            'satuan'            => 'required',
            'skpd'              => 'required',
            'bidang_urusan'     => 'required',
            'nama_kelompok'        => 'required|numeric',
        ]);

        $tipe ='';
        if($request->tipe == '1') $tipe = 'FISIK';
        elseif($request->tipe == '2') $tipe = 'NON FISIK';

        $kamus = new KamusUsulanModel;
        $kamus->tipe_keg            = $request->tipe;
        $kamus->nama_pekerjaan      = ucwords($request->nm_pekerjaan);
        $kamus->harga               = $request->harga;
        $kamus->satuan              = $request->satuan;
        $kamus->skpd_pelaksana      = $request->skpd;
        $kamus->bidang_urusan       = $request->bidang_urusan;
        $kamus->id_skoring          = $request->nama_kelompok;
        $kamus->status              = 'Aktif';
        $kamus->sts_rpjmd           = 'FALSE';
        $kamus->us_en               = ucwords(Auth::user()->name);
        $kamus->us_ed               = ucwords(Auth::user()->name);
        $kamus->save();

        return redirect('administrator/kamus-usulan')->with('pesan', 'Kamus Usulan '.$request->nm_pekerjaan.' telah ditambahkan !');
    }


    public function viewEditKamusUsulan($id){
        $detail = KamusUsulanModel::find($id);
        $skpd   = SKPDModel::all();
        $satuan = SatuanModel::all();
        $bidang = BidangUrusanModel::all();
        $skoring = SkoringModel::all();
        return view('admin.admin.kamususulan.editkamususulan',compact('detail','skpd','satuan','bidang','skoring'));
    }

    public function postEditKamusUsulan(Request $request){

        $this->validate($request, [
            'id_kegiatan'       => 'required|numeric',
            'tipe'              => 'required|numeric',
            'nm_pekerjaan'      => 'required',
            'harga'             => 'required',
            'satuan'            => 'required',
            'skpd'              => 'required',
            'bidang_urusan'     => 'required',
            'nama_kelompok'     => 'required|numeric',
        ]);


         $tipe ='';
        if($request->tipe == '1') $tipe = 'FISIK';
        elseif($request->tipe == '2') $tipe = 'NON FISIK';

        $kamus = KamusUsulanModel::find($request->id_kegiatan);
        $kamus->tipe_keg            = $request->tipe;
        $kamus->nama_pekerjaan      = ucwords($request->nm_pekerjaan);
        $kamus->harga               = $request->harga;
        $kamus->satuan              = $request->satuan;
        $kamus->skpd_pelaksana      = $request->skpd;
        $kamus->bidang_urusan       = $request->bidang_urusan;
        $kamus->id_skoring          = $request->nama_kelompok;
        $kamus->us_ed               = ucwords(Auth::user()->name);
        $kamus->save();

        return redirect('administrator/kamus-usulan')->with('pesan', 'Kamus Usulan '.$kamus->nama_pekerjaan.' telah diperbaharui !');

    }

    public function deleteKamusUsulan($id){
        $jalan = KamusUsulanModel::find($id);
        $nama = $jalan->nm_jalan;
        $jalan->delete();
        return redirect('administrator/kamus-usulan')->with('pesan', 'Data Kamus Usulan '.$nama.' telah dihapus !');
    }
}
