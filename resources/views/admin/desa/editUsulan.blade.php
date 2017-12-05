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
                <h5 class="breadcrumbs-title">Edit Usulan Kampung</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{url('desa')}}">Beranda</a></li>
                    <li><a href="{{url('desa/usulan')}}">Usulan</a></li>
                    <li class="active">Input Usulan Kampung</li>
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


                <form class="col s12" method="post" action="{{url('desa/usulan/edit')}}" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-content">
                                <h5>{{$usulan->nama_pekerjaan}}</h5>
                                <h5>Biaya Rp.{{$usulan->harga.'/'.$usulan->satuan}}</h5>
                            </div>
                        </div>
                    </div>
                    {{csrf_field()}}
                    <input type="hidden" name="id_usul" value="{{$detail->id_usul_desa}}">
                    <input type="hidden" name="id_kegiatan" value="{{$usulan->id_kegiatan}}">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-content">
                                <div class="row">
                                <div class="input-field col s12">
                                    <select name="level_usulan" required>
                                        <option value="" disabled selected>Pilih Level Usulan</option>
                                        <option value="UTAMA" <?php if($detail->level == 'UTAMA')echo "selected";?>>UTAMA</option>
                                        <option value="CADANGAN" <?php if($detail->level == 'CADANGAN')echo "selected";?>>CADANGAN</option>
                                    </select>
                                    <label>Level Usulan</label>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" name="volume" value="{{$detail->volume}}" required>
                                    <label>Jumlah atau Volume</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select name="jalan" required>
                                        <option value="" disabled selected>Nama Jalan</option>
                                        @foreach($jalan as $jln)
                                        <option value="{{$jln->nm_jalan}}" <?php if($jln->nm_jalan == $detail->jalan)echo "selected";?> >{{$jln->nm_jalan}}</option>
                                        @endforeach
                                    </select>
                                    <label>Nama Jalan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" name="ket_nomor" value="{{$detail->ket_nomor}}" required>
                                    <label>Nomor</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea class="materialize-textarea" name="ket_lokasi" required>{{$detail->ket_lokasi}}</textarea>
                                    <label>Keterangan Lokasi</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select name="status_lahan" required>
                                        <option value="" disabled selected>Status Lahan</option>
                                        <option <?php if($detail->status_lahan == "Milik Pemerintah Kota")echo"selected";?>>Milik Pemerintah Kota</option>
                                        <option <?php if($detail->status_lahan == "Milik Instansi Lain")echo"selected";?>>Milik Instansi Lain</option>
                                        <option <?php if($detail->status_lahan == "Milik Warga")echo"selected";?>>Milik Warga</option>
                                    </select>
                                    <label>Status Lahan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea class="materialize-textarea" name="keterangan">{{$detail->keterangan}}</textarea>
                                    <label>Keterangan Kebutuhan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <p>
                                        <input class="with-gap" name="faktor1" type="radio" id="f11" value="1" <?php if($detail->nilai1=='1')echo "checked"; ?>>
                                        <label for="f11">{{$usulan->skoring->faktor1_nilai1}}</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="faktor1" type="radio" id="f12" value="2" <?php if($detail->nilai1=='2')echo "checked"; ?>>
                                        <label for="f12">{{$usulan->skoring->faktor1_nilai2}}</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="faktor1" type="radio" id="f13" value="3" <?php if($detail->nilai1=='3')echo "checked"; ?>>
                                        <label for="f13">{{$usulan->skoring->faktor1_nilai3}}</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="faktor1" type="radio" id="f14" value="4" <?php if($detail->nilai1=='4')echo "checked"; ?>>
                                        <label for="f14">{{$usulan->skoring->faktor1_nilai4}}</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <p>
                                        <input class="with-gap" name="faktor2" type="radio" id="f21" value="1" <?php if($detail->nilai2=='1')echo "checked"; ?>>
                                        <label for="f21">{{$usulan->skoring->faktor2_nilai1}}</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="faktor2" type="radio" id="f22" value="2" <?php if($detail->nilai2=='2')echo "checked"; ?>>
                                        <label for="f22">{{$usulan->skoring->faktor2_nilai2}}</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="faktor2" type="radio" id="f23" value="3" <?php if($detail->nilai2=='3')echo "checked"; ?>>
                                        <label for="f23">{{$usulan->skoring->faktor2_nilai3}}</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="faktor2" type="radio" id="f24" value="4" <?php if($detail->nilai2=='4')echo "checked"; ?>>
                                        <label for="f24">{{$usulan->skoring->faktor2_nilai4}}</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <p>
                                        <input class="with-gap" name="faktor3" type="radio" id="f31" value="1" <?php if($detail->nilai3=='1')echo "checked"; ?>>
                                        <label for="f31">{{$usulan->skoring->faktor3_nilai1}}</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="faktor3" type="radio" id="f32" value="2" <?php if($detail->nilai3=='2')echo "checked"; ?>>
                                        <label for="f32">{{$usulan->skoring->faktor3_nilai2}}</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="faktor3" type="radio" id="f33" value="3" <?php if($detail->nilai3=='3')echo "checked"; ?>>
                                        <label for="f33">{{$usulan->skoring->faktor3_nilai3}}</label>
                                    </p>
                                    <p>
                                        <input class="with-gap" name="faktor3" type="radio" id="f34" value="4" <?php if($detail->nilai3=='4')echo "checked"; ?>>
                                        <label for="f34">{{$usulan->skoring->faktor3_nilai4}}</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="file-field input-field col m12">
                                <div class="btn">
                                  <span>Foto</span>
                                  <input type="file" multiple name="foto[]">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate valid" type="text" placeholder="Upload 1 atau lebih foto">
                                </div>
                              </div>
                              * input untuk mengganti foto
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="cp_nama" value="{{$detail->cp_nama}}" required>
                                    <label>Nama</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="cp_alamat" value="{{$detail->cp_alamat}}" required>
                                    <label>Alamat</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" name="cp_telp" value="{{$detail->cp_telp}}" required>
                                    <label>Telpon</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" name="cp_hp" value="{{$detail->cp_hp}}" required>
                                    <label>HP</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit">Perbaharui Usulan
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end container-->
@endsection