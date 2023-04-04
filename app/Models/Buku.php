<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';
    public function rak_buku(): BelongsTo{
        return $this->belongsTo(RakBuku::class);
    }
    // protected $primaryKey = 'id';
    
}
