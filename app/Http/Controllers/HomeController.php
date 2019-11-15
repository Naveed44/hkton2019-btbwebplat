<?php

namespace App\Http\Controllers;

use App\ReturnHandler;
use App\TransactionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Marketplace.main');
    }

    public function getusrprd(Request $request){

        if(!empty($validador))
            return ReturnHandler::rtrerrjsn($validador[0]);

        $trncnn = TransactionHandler::begin();

        $usrprd = \TblentprdQuery::fndusrprd(1);

        return view('Marketplace.main')
            ->with('usrprd', $usrprd);
    }
}
