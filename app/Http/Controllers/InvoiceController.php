<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function showInvoice()
    {
        $kodeReseller = Auth::user()->kode_reseller;

        $resellers = Reseller::getInvoice($kodeReseller);

        // Jika tidak ada invoice, tampilkan pesan

        $message = null;

        if ($resellers->isEmpty()) {
            $message = now()->translatedFormat('l') === 'Minggu'
            ? 'Tidak ada invoice pada hari Minggu.'
            : 'Tidak ada reseller yang memiliki invoice pada hari ini.';
        }

        return view('invoice.index', compact('resellers', 'message'));
    }
}
