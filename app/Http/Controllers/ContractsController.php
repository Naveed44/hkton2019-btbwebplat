<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContractsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $opnauc = \Tblentauc::fndactauc();

        return view('Contracts.main')
            ->with('actbid', $opnauc->toArray());
    }

    public function contract() {
        return response()
            ->download('contract.pdf');
    }

}
