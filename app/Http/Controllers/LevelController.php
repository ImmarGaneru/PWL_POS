<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\DataTables\LevelDataTable;
use App\Http\Requests\LevelPostRequest;
use App\Models\LevelModel;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable){
        return $dataTable->render('level.index');

        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Update data berhasil, Jumlah data yang diupdate: ' . $row.' baris';
    
        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil, Jumlah data yang dihapus: ' . $row.' baris';
    
        // $data = DB::select('select * from m_level');
        // return view('level', ['data' => $data]);
    }

    public function create(): view{
        return view('level.create');
    }

    public function store(LevelPostRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated = $request->safe()->only(['level_kode', 'level_nama']);
        

        return redirect('/level');
    }
}
