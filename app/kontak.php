<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    protected $table='tb_kontak';
    protected $fillable=['nama', 'email', 'telepon', 'pesan'];
}
