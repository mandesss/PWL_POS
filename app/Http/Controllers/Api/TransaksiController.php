<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function show($id)
    {
        $penjualan = PenjualanModel::with('user')->findOrFail($id);
        $barang = $penjualan->detail()->with('barang')->get();
        $penjualan->barang = $barang;
        return response()->json($penjualan, 200);
    }
}