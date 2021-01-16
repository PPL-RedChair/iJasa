<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistik extends Model
{
    use HasFactory;

    protected $table = 'logistik';

    protected $guarded = [];

    public function bencana()
    {
        return $this->belongsTo(Bencana::class);
    }
}
