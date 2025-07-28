<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluate extends Model
{
    use HasFactory;

    protected $table = 'evaluate';
    protected $fillable = [
        'id_nilai',
        'message'
    ];

    public function nilaiQuis()
    {
        return $this->belongsTo(NilaiQuis::class, 'id_nilai');
    }
} 