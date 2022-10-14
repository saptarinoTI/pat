<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    // public $guarded = [];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'bigInteger';

    protected $fillable = [
        'id',
        'user_id',
        'nama',
        'tempatlahir',
        'tgllahir',
        'jkelamin',
        'alamat',
        'telpon',
        'hari',
        'shift',
        'keterangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function traveling()
    {
        return $this->hasOne(Traveling::class);
    }

    public function dialisis()
    {
        return $this->hasOne(Dialisis::class);
    }
}
