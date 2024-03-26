<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public Function index(UserDataTable $dataTable){
        return $dataTable->render('user.index');
    }
    
    public function create(): view{
        return view('user.create');
    }

    public function store(Request $request): RedirectResponse{
        $validated = $request->validate([
            'level_id' => 'required',
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',

        ]);
        return redirect('/level');
    }
}
