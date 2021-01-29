<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table='tb_guru';
    protected $fillable=['nama', 'nip', 'pelajaran'];
}
