<?php

namespace App\Http\Controllers\SKPD;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SKPDModel;
use App\Model\UsulanSKPDModel;
use Auth;

class BASKPDController extends Controller
{
    public function viewBeritaAcara(){
    	return view('admin.skpd.beritaAcara');
    }

    public function postBeritaAcara(Request $request){
    	$this->validate($request,[
			'no_ba' 			=> 'required',
	    	'tgl_ba' 			=> 'required',
	    	'pemateri_lain' 	=> 'required',
	    	'pimpinan_sidang'	=> 'required',
	    	'hari' 				=> 'required',
	    	'tanggal' 			=> 'required',
	    	'waktu' 			=> 'required',
	    	'tempat' 			=> 'required'
		]);

    	$skpd = SKPDModel::where('id_skpd',Auth::user()->kode_wilayah)->first();

    	$skpd_name = $skpd->nm_skpd;
    	$usulan = UsulanSKPDModel::where('skpd_pelaksana',$skpd->nm_skpd)->get();

    	return view('admin.skpd.cetakba',compact('request','usulan','skpd_name'));
    }
}