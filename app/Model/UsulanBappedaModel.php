<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UsulanBappedaModel extends Model
{
    protected $table = "usulan_bappeda";
    protected $primaryKey = "id_usul_bappeda";

    const CREATED_AT = 'tgl_en';
	const UPDATED_AT = 'tgl_ed';
}
