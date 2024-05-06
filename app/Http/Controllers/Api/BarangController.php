<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BarangRequest;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    public function index()
    {
        return BarangModel::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori_id' => 'required|exists:m_kategori',
            'barang_kode' => 'required|unique:m_barang,barang_kode|string|min:3|max:10',
            'barang_nama' => 'required|string|max:100',
            'harga_beli' => 'required|integer',
            'harga_jual' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('image')) {
            $barang = barangModel::create([
                'kategori_id' => $request->kategori_id,
                'barang_kode' => $request->barang_kode,
                'barang_nama' => $request->barang_nama,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'image' => $request->image->hashName(),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'errors' => 'Image upload failed',
            ], 422);
        }

        // $barang = BarangModel::create($request->all());
        // return response()->json($barang, 201);

        if($barang){
            return response()->json([
                'success' => true,
                'user' => $barang,
            ], 201); 
        }

        //return JSON process insert failed
        return response()->json([
            'success' => false
        ], 409);
    }

    public function show(BarangModel $barang): JsonResponse
    {
        return response()->json([
            'success' => true,
            'barang' => $barang
        ]);
    }

    public function update(Request $request, BarangModel $barang)
    {
        $barang->update($request->all());
        return BarangModel::find($barang);
    }

    public function destroy(BarangModel $barang)
    {
        $barang->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}
