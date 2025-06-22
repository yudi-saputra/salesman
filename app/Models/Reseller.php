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
        'aktif',
        'kode_upline',
    ];

    public static function getReseller()
    {
         $resellers = DB::connection('sqlsrv')
                    ->table('reseller as r1')
                    ->join('reseller as r2', 'r1.kode_upline', '=', 'r2.kode')
                    ->leftJoin('level as l', 'r1.kode_level', '=', 'l.kode')
                    ->select('r1.*', 'l.nama as nama_level');

        return $resellers;
    }

    public function level()
    {
        return $this->belongsTo(level::class, 'kode_level', 'kode');
    }

    public static function getInvoice($kodeReseller)
    {
        $hari = now()->locale('id')->isoFormat('dddd');

        $prefix = match ($hari) {
            'Senin', 'Kamis' => '1M',
            'Selasa', 'Jumat' => '1T',
            'Rabu', 'Sabtu' => '1W',
            default => null, // Minggu = Libur
        };

        if (!$prefix) {
            return collect(); // Tidak ada invoice pada hari Minggu
        }

        return self::getReseller()
            ->where(function ($q) use ($kodeReseller) {
                $q->where('r1.kode_upline', $kodeReseller)
                  ->orWhere('r1.kode', $kodeReseller);
            })

            ->where('r1.nama', 'like', $prefix . '%')
            ->orderBy('r1.nama')
            ->get();
    }
}
