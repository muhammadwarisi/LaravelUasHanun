<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Kopi;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $kopi = Kopi::paginate(7);
        $cabang = Cabang::paginate(7);
        return view('halaman.index', ['data'=>$kopi, 'cabang'=>$cabang]);
    }
}
