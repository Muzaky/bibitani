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

    protected $table = 'pemberian_bantuan';

    protected $primaryKey = "id_berita";
    protected $fillable = [
        "id_berita",
        'judul',
        'isi',
        'gambar',
    ] ;
    public function getData(){
        return DB::table('pemberian_bantuan');
    }
}