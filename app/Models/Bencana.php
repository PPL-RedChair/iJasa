<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bencana extends Model
{
    use HasFactory;

    protected $table = 'bencana';

    protected $guarded = [];

    public function jenis_bencana()
    {
        return $this->belongsTo(JenisBencana::class, 'jenis_bencana_id');
    }

    public function logistik()
    {
        return $this->hasOne(Logistik::class);
    }
}
