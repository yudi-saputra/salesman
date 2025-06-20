<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reseller extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';
    protected $table = 'reseller';
    public $timestamps = false;

    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode',
        'nama',
        'saldo',
        'saldo_minimal',
        'kode_level',
        'kode_upline',
    ];

    public static function getReseller()
    {
         $resellers = DB::connection('sqlsrv')
                    ->table('reseller as r1')
                    // ->join('reseller as r2', 'r1.kode_upline', '=', 'r2.kode')
                    ->leftJoin('level as l', 'r1.kode_level', '=', 'l.kode')
                    ->select('r1.*', 'l.nama as nama_level');

        return $resellers;
    }

    public function level()
    {
        return $this->belongsTo(level::class, 'kode_level', 'kode');
    }
}
