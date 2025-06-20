<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ResellerController extends Controller
{
    public function showResellers()
    {
        $kodeReseller = Auth::user()->kode_reseller;

        // get role berdasarkan user_id
        $userRole = $this->getRoleUserLogin();

        $resellers = Reseller::getReseller();
        // jika  manager area tampilkan data reseller sesiai area nya
        if ($userRole == 5) { // sales
            // jika sales tampilkan data reseller sesuai area dan kode upline nya
            $resellers = $resellers->where('r1.kode_upline', $kodeReseller);
            // jika selles tamankan data reseller sesuai area dan kode upline nya
        }else if($userRole == 4) {

            $resellers = $resellers->where('r1.kode_upline', 'ADMINJKT'); // perlu dibahas management
        }

        // jika adminsistrator, manager all, finance, tampilkan data semua reseller
        $resellers = $resellers->orderBy('r1.nama')->get(); // ini role_id 1,4

        return view('reseller.index', compact('resellers'));
    }

    private function getRoleUserLogin()
    {
         $userRole = DB::table('user_roles as a')->select('a.role_id')->join('roles as b', 'a.role_id', '=', 'b.id')->where('user_id', Auth::user()->id)->first();
         return $userRole->role_id ?? null;
    }
}
