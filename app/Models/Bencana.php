<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bencana extends Model
{
    use HasFactory;

    protected $table = 'bencana';

    public function jenis_bencana()
    {
        return $this->belongsTo(JenisBencana::class, 'jenis_bencana_id');
    }
}
