<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\PokokPikiranDPRDModel;

class PokirDPRDController extends Controller
{
    public function viewPokokPikiran(){
    	$pokir = PokokPikiranDPRDModel::all();
    	return view('admin.admin.pokir.pokok-pikiran',compact('pokir'));
    }
}
