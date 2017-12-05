<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DesaModel;

class DataController extends Controller
{
    public function getDesa($id){
    	return DesaModel::where('kd_distrik',$id)->get();
    }
}
