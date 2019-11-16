<?php

namespace App\Http\Controllers;

use App\ReturnHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuctionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $opnauc = \Tblentauc::fndactauc();
        return view('Auctions.main')
            ->with('actauc', $opnauc->toArray());
    }

    public function filtrar($txt) {
        $opnauc = \Tblentauc::fndtxtauc($txt);
        return view('Auctions.main')
            ->with('actauc', $opnauc->toArray());
    }

    public function modal($cve) {
        $modauc = \Tblentauc::fnocveauc($cve);

        if(!$modauc)
            return null;

        $bidauc = \Tblentbid::fndaucbid($cve);

        return view('Auctions.modal')
            ->with('auc', $modauc->toArray())
            ->with('aucbid', $bidauc->toArray());

    }

    public function bid(Request $request){
        $ppini = $request->get('ppuni');
        $quant = $request->get('quant');
        $auct = $request->get('auct');

        $dup = \Tblentbid::fnddplbid(Auth::id(), $auct);

        if($dup > 0)
            return ReturnHandler::rtrerrjsn('Ya cuenta con una oferta para esta subasta');

        $ins = \Tblentbid::insentbid($ppini, $quant, $auct, Auth::id());

        if(!$ins)
            return ReturnHandler::rtrerrjsn();

        return ReturnHandler::rtrsccjsn("");

    }
}
