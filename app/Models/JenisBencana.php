<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBencana extends Model
{
    use HasFactory;

    protected $table = 'jenis_bencana';

    public function bencana()
    {
        return $this->hasMany(Bencana::class, 'jenis_bencana_id');
    }
}
