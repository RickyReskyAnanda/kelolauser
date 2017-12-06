@extends('admin.index')

@section('content')
<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
    <!-- Search for small screen -->
    <div class="header-search-wrapper grey hide-on-large-only">
        <i class="mdi-action-search active"></i>
        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Tambah Usulan</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{url('administrator')}}">Beranda</a></li>
                    <li><a href="{{url('administrator/kamus-usulan')}}">Kamus Usulan</a></li>
                    <li class="active">Tambah</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--start container-->
<div class="container">
    <div class="section">
        <!--Form Advance-->          
        <div class="row">
            <div class="col s12 m12 l12">
                @if (session('pesan'))
                <div id="card-alert" class="card orange">
                      <div class="card-content white-text">
                        <p><i class="mdi-alert-warning"></i> WARNING : {{session('pesan')}}</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                @endif
                <div class="card-panel">
                    <div class="row">
                        <form class="col s12" class="formValidate" id="kamususulanadd" method="post" action="{{url('administrator/kamus-usulan/tambah')}}">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col s12">
                                    <label for="tipe">Tipe Kegiatan*</label>
                                    <select class="error browser-default" id="tipe" name="tipe" data-error=".errorTxt">
                                        <option value="" disabled selected>Tipe Kegiatan</option>
                                        <option value="1">FISIK</option>
                                        <option value="2">NON FISIK</option>
                                    </select>
                                    <div class="input-field">
                                        <div class="errorTxt"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="nm_pekerjaan"> Nama Pekerjaan </label>
                                    <input type="text" id="nm_pekerjaan" name="nm_pekerjaan" data-error=".errorTxt1">
                                    <div class="errorTxt1"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <label for="harga">Harga</label>
                                    <input type="number" id="harga" name="harga" data-error=".errorTxt2">
                                    <div class="errorTxt2"></div>
                                </div>
                                <div class="col s6">
                                    <label for="satuan">Satuan</label>
                                    <select class="error browser-default" name="satuan" id="satuan" data-error=".errorTxt3">
                                        <option value="" disabled selected>Satuan</option>
                                        @foreach($satuan as $stn)
                                        <option value="{{$stn->satuan}}">{{$stn->satuan}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-field">
                                        <div class="errorTxt3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <label for="skpd">SKPD Pelaksana</label>
                                    <select name="skpd" id="skpd" class="error browser-default" data-error=".errorTxt4">
                                        <option value="" disabled selected>SKPD Pelaksana</option>
                                        @foreach($skpd as $skp)
                                        <option value="{{$skp->nm_skpd}}">{{$skp->nm_skpd}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-field">
                                        <div class="errorTxt4"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <label for="bidang_urusan">Bidang Urusan</label>
                                    <select name="bidang_urusan" id="bidang_urusan" class="error browser-default" data-error=".errorTxt5">
                                        <option value="" disabled selected>Pilih Bidang Urusan</option>
                                        @foreach($bidang as $bdg)
                                        <option value="{{$bdg->bidang}}">{{$bdg->bidang}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-field">
                                        <div class="errorTxt5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <label for="nama_kelompok">Nama Kelompok</label>
                                    <select name="nama_kelompok" id="nama_kelompok" class="error browser-default" data-error=".errorTxt6">
                                        <option value="" disabled selected>Pilih Nama Kelompok</option>
                                        @foreach($skoring as $skr)
                                        <option value="{{$skr->id_skoring}}">{{$skr->nama_kelompok}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-field">
                                        <div class="errorTxt6"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit">Simpan
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end container-->
@endsection