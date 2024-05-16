<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\m_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = m_barang::with('kategori', 'stok')->get();

        return response()->json([
            'status_code' => 200,
            'data' => $barangs
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori_id' => 'required|exists:m_kategori,kategori_id',
            'barang_kode' => 'required|unique:m_barang',
            'barang_nama' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 400,
                'errors' => $validator->errors()
            ]);
        }

        $barang = m_barang::create($request->all());

        return response()->json([
            'status_code' => 201,
            'data' => $barang
        ]);
    }

    public function show(m_barang $barang)
    {
        return $barang;
        $barang->load('kategori', 'stok'); // Load relasi kategori dan stok

        return response()->json([
            'status_code' => 200,
            'data' => $barang
        ]);
    }

    public function update(Request $request, m_barang $barang)
    {
        $barang->update($request->all());

        return response()->json([
            'status_code' => 200,
            'data' => $barang
        ]);
    }

    public function destroy(m_barang $barang)
    {
        $barang->delete();

        return response()->json([
            'status_code' => 204,
            'success' => true,
            'message' => 'Barang terhapus',
        ]);
    }
}