@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<!-- Add level -->
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Add Level</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="kodeLevel">Kode Level</label>
          <input type="text" class="form-control" id="kodeLevel" placeholder="Enter Kode">
        </div>
        <div class="form-group">
          <label for="namaLevel">Nama Level</label>
          <input type="text" class="form-control" id="namaLevel" placeholder="Enter Nama">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->

  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Add User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <h4>Input</h4>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control form-control-border" id="username" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="namaUser">Nama</label>
        <input type="text" class="form-control form-control-border border-width-2" id="namaUser" placeholder="Nama">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control form-control-border border-width-2" id="password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="level">Level</label>
        <select class="custom-select rounded-0" id="level">
          <option>Administrator</option>
          <option>Manager</option>
          <option>Staff/Kasir</option>
          <option>Pelanggan</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop