<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\BarangModel;
use App\Models\PenjualanModel;
use App\Models\UserModel;
use App\Models\DetailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Yajra\DataTables\Facades\DataTables;

class PenjualanController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar Transaksi Penjualan',
            'list' => ['Home', 'Penjualan']
        ];
        $page = (object)[
            'title' => 'Daftar transaksi penjualan yang terdaftar dalam sistem'
        ];
        $activeMenu = 'penjualan';   //set menu yg sdg aktif

        $barang = BarangModel::all();
        $user = UserModel::all();
        $penjualan = PenjualanModel::all();
        return view('penjualan.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'barang' => $barang, 'user' => $user, 'penjualan' => $penjualan, 'activeMenu' => $activeMenu]);
    }
    // Ambil data user dalam bentuk json untuk datatables
    public function list(Request $request)
    {
        $penjualans = PenjualanModel::select('penjualan_id', 'user_id', 'pembeli', 'penjualan_kode', 'penjualan_tanggal')
            ->with('user');

        // Praktikum 4 JS 7 - Filter data user berdasarkan level_id
        if ($request->user_id) {
            $penjualans->where('user_id', $request->user_id);
        }

        return DataTables::of($penjualans)
            ->addIndexColumn() // Menambahkan kolom index / no urut (default nmaa kolom: DT_RowINdex)
            ->addColumn('aksi', function ($penjualan) {
                $btn = '<a href="' . url('/penjualan/' . $penjualan->penjualan_id) . '" class="btn btn-info btn-sm">Detail</a>  &nbsp;';
                $btn .= '<a href="' . url('/penjualan/' . $penjualan->penjualan_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a>  &nbsp;';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/penjualan/' . $penjualan->penjualan_id) . '">' . csrf_field() . method_field('DELETE')
                    . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakit menghapus data
                ini?\');">Hapus</button></form>';
                return $btn;
            })

            ->rawColumns(['aksi'])
            ->make(true);
    }
    public function create()
    {
        $breadcrumb = (object)[
            'title' => 'Tambah Transaksi Penjualan',
            'list' => ['Home', 'Transaksi Penjualan', 'Tambah']
        ];
        $page = (object)[
            'title' => 'Tambah transaksi penjualan'
        ];
        $user = UserModel::all();
        $barang = BarangModel::all(); // ambil data level untuk ditampilkan di form
        $activeMenu = 'penjualan'; //set menu yang sedang aktif

        return view('penjualan.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'user' => $user, 'barang' => $barang, 'activeMenu' => $activeMenu]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'penjualan_kode'        => 'required|string|min:5|unique:t_penjualan,penjualan_kode',
            'user_id'               => 'required|integer',
            'pembeli'               => 'required|string|max:100',
            'penjualan_tanggal'     => 'required|date',
            'barang_id'             => 'required|integer',
            'jumlah'                => 'required|integer'
        ]);
        $penjualan = PenjualanModel::create([
            'penjualan_kode'        => $request->penjualan_kode,
            'user_id'               => $request->user_id,
            'pembeli'               => $request->pembeli,
            'penjualan_tanggal'     => $request->penjualan_tanggal
        ]);

        // Simpan detail penjualan
        $barang = BarangModel::findOrFail($request->barang_id);
        $harga = $barang->harga_jual;
        $penjualan_id = $penjualan->penjualan_id;

        DetailModel::create([
            'penjualan_id'  => $penjualan_id,
            'barang_id'     => $request->barang_id,
            'harga'         => $harga,
            'jumlah'        => $request->jumlah
        ]);
        return redirect('/penjualan')->with('success', 'Data transaksi berhasil disimpan');
    }
    public function show(string $id)
    {
        $penjualan = PenjualanModel::with('user')->find($id);
        $user = UserModel::all();
        $barang = BarangModel::all();
        $detail = DetailModel::all();

        $breadcrumb = (object)[
            'title' => 'Detail Transaksi',
            'list' => ['Home', 'Transaksi', 'Detail']
        ];

        $page = (object)[
            'title' => 'Detail Transaksi'
        ];

        $activeMenu = 'penjualan';

        return view('penjualan.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'penjualan' => $penjualan, 'user' => $user, 'barang' => $barang, 'detail' => $detail, 'activeMenu' => $activeMenu]);
    }
}