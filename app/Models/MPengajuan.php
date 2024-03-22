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

    protected $table = 'pengajuan_pemberian_bantuan';

    protected $primaryKey = "id_pengajuan";
    protected $fillable = [
        "id_pengajuan",
        'judul',
        'proposal',
        'id_kelompoktani',
        'status_pengajuan',
        'keterangan',
    ] ;
    static function getData(){
        return DB::table('pengajuan_pemberian_bantuan');
    }
}