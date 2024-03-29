@extends('layout.app')

{{-- Customize layout sections  --}}
@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Tambah')

{{-- Content body:main page content  --}}
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Input Level</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="../level">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Level Kode</label>
                    <input type="text" name="level_kode" class="form-control @error('level_kode') is-invalid @enderror" id="exampleInputPassword1" placeholder="Input Level Kode">

                    @error('level_kode')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Level Nama</label>
                    <input type="text" name="level_nama" class="form-control @error('level_nama') is-invalid @enderror" id="exampleInputPassword1" placeholder="Input level Nama">

                    @error('level_nama')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif