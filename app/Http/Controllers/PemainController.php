<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemain;

class PemainController extends Controller
{
    public function index(){
        $data_pemain = Pemain::all();
        return view('index',['data_pemain' => $data_pemain]);
    }
}
