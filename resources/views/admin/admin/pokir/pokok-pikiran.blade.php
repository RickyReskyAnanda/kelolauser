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
                <h5 class="breadcrumbs-title">Pokok Pikiran DPRD</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{url('administrator')}}">Beranda</a></li>
                    <li class="active">Pokok Pikiran DPRD</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--start container-->
<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12">
                @if (session('pesan'))
                <div id="card-alert" class="card green">
                    <div class="card-content white-text">
                        <p><i class="mdi-navigation-check"></i> SUCCESS : {{session('pesan')}}</p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                
                <div class="card">
                    <div class="card-content">
                        <div id="table-datatables">
                            <div class="row">
                                
                                <div class="col s12">
                                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                    <thead>
                                        <th>No</th>
                                        <th>Program/Kegiatan</th>
                                        <th>Indikator Kinerja</th>
                                        <th>Volume</th>
                                        <th>Lokasi</th>
                                        <th>SKPD Terkait</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;?>
                                        @foreach($pokir as $pkr)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$pkr->program_kegiatan}}</td>
                                                <td>{{$pkr->indikator_kinerja}}</td>
                                                <td>{{$pkr->volume}}</td>
                                                <td>{{$pkr->lokasi}}</td>
                                                <td>{{$pkr->skpd_pelaksana}}</td>
                                                <td>{{$pkr->ket}}</td>
                                                <td>
                                                    <a class="btn cyan" href="{{url('administrator/pokok-pikiran/'.strtolower($pkr->sts).'/'.$pkr->id_pokir)}}">{{$pkr->sts}}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!--end container-->
@endsection