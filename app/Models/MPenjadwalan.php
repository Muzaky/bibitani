<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MBerita extends Model
{
    use HasFactory, Uuids;

    protected $guarded = [];

    protected $table = 'penjadwalan_bantuan';

    protected $primaryKey = "id_penjadwalan";
    protected $fillable = [
        "id_penjadwalan",
        "id_pengajuan",
        'id_kelompoktani',
        'dokumentasi_1',
        'dokumentasi_2',
        'tanggal',
        'status_penjadwalan',
    ] ;
    static function getData(){
        return DB::table('penjadwalan_bantuan');
    }
}