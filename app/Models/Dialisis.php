<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dialisis extends Model
{
    use HasFactory;

    // public $guarded = [];
    protected $table = 'dialisis_book';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'bigInteger';
    protected $fillable = [
        'pasien_id', 'tanggal', 'hd', 'hf', 'pre_beratbadan', 'post_beratbadan', 'pre_tdarah', 'post_tdarah', 'pre_bun', 'post_bun'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
