@extends('admin.index')

@section('content')

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
                <form class="col s12" method="post" action="{{url('akun')}}">
                    {{csrf_field()}}
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" name="old_pass" placeholder="Masukkan Password Lama"  required>
                                    <label>Password Lama</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" name="new_pass" placeholder="Masukkan Password Baru"  required>
                                    <label>Password Baru</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" name="confirm_pass" placeholder="Masukkan Kembali Password Baru"  required>
                                    <label>Konfirmasi Password Baru</label>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit">Perbaharui Akun
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