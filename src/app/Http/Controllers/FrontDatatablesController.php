<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Nick\SecureSpreadsheet\Encrypt;

class FrontDatatablesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('datatables');
    }

    public function export()
    {
        $test = new Encrypt();
        return $test->input('users.xlsx')
            ->password('1234')
            ->output('users-encrypt.xlsx');
    }
}
