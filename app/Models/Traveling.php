<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Traveling extends Model
{
    use HasFactory;

    // public $guarded = [];
    protected $table = 'traveling_dialisis';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'bigInteger';

    protected $fillable = [
        "pasien_id",
        "asal_hd",
        "tujuan_hd",
        "diagnosa",
        "pertama",
        "terakhir",
        "frekuensi",
        "mesin",
        "dialiser",
        "dialisat",
        "aliran_dialisat",
        "aliran_darah",
        "lama",
        "ultrafiltrasi",
        "uf_profiling",
        "heparinisasi",
        "akses_faskuler",
        "hbsag",
        "antihcv",
        "antihiv",
        "tglceklab",
        "penyulit_hd",
        "beratbadan_kering",
        "beratbadan_akhir",
        "tekanan_darah",
        "lab_HB",
        "lab_ureum",
        "lab_kreatinin",
        "lab_natrium",
        "lab_kalium",
        "lab_prot",
        "lab_albumin",
        "obat",
        "tranfusi_terakhir",
        "goldar",
        "reaksi_transfusi",
        "keterangan",
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
