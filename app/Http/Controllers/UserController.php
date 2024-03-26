<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Http\Requests\UserPostRequest;
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

    public function store(UserPostRequest $request): RedirectResponse{
        $validated = $request->validated();
        $validated = $request->safe()->only(['username', 'nama', 'password','level_id']);
        UserModel::create([
            'username' => $validated['username'],
            'nama' => $validated['nama'],
            'password' => $validated['password'],
            'level_id' => $validated['level_id'],
        ]);
        return redirect('/level');
    }
}
