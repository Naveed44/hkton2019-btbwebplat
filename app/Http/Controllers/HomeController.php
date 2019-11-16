<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\ReturnHandler;
use App\TransactionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $prds = \Tblentprd::fndallprd();
        return view('myprds')
            ->with("products", $prds)
            ->with("length", count($prds));
    }

    public function getmyprds()
    {
        if (!Auth::guest()) {
            $usr = Auth::id();
            $prds = \Tblentprd::fndprdbyuserid($usr);
            if($prds == false || is_null($prds)){
                return view('myprds')
                    ->with("products", $prds)
                    ->with("length", 0);
            }
        } else {
            $prds = \Tblentprd::fndallprd();
        }

        return view('myprds')
            ->with("products", $prds)
            ->with("length", count($prds));
    }

    public function newproductview(){
        return view("newproduct");
    }

    public function newproduct(Request $request){
        $name = $request->get('prdname');
        $desc = $request->get('prddesc');
        $cant = $request->get('prdcant');
        $unit = $request->get('entuni');
        $pcls = $request->get('prdcls');
        $qual = $request->get('qual');
        $usid = Auth::id();
        $timestamp = date(DATE_ISO8601);

        $trncnn = TransactionHandler::begin();
        $entprd = \Tblentprd::insentprd($pcls, $qual, $unit, $usid,$name, $cant, $desc, $timestamp, $trncnn);
        if(!$entprd){
            TransactionHandler::rollback($trncnn);
            ReturnHandler::rtrerrjsn("Ha ocurrido un error. (1)");
        }
        if(TransactionHandler::commit($trncnn))
            ReturnHandler::rtrsccjsn("Producto registrado con exito.");
        else
            ReturnHandler::rtrerrjsn("Ha ocurrido un error. (2)");
    }
}
