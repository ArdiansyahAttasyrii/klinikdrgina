@extends('layouts.index')
@section('title','Edit Obat')
@section('content') 
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('obat.update', $obat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="namaObat">Nama Obat</label>
              <input type="text" class="form-control" name="nama" value="{{ $obat->nama }}" placeholder="Masukkan Nama Obat">
            </div>
            <div class="form-group">
              <label for="harga">Harga Obat</label>
              <input type="number" class="form-control" name="harga" value="{{ $obat->harga }}" placeholder="Masukkan Harga Obat">
            </div>
            <div class="form-group">
              <label for="jenis">Jenis Obat</label>
              <input type="text" class="form-control" name="jenis" value="{{ $obat->jenis }}" placeholder="Masukkan Jenis Obat">
            </div>
            <div class="form-group">
              <label for="stok">Stok Obat</label>
              <input type="number" class="form-control" name="stok" value="{{ $obat->stok }}" placeholder="Masukkan Stok Obat">
            </div>
            <div class="form-group">
              <label for="fotoObat">Foto Obat</label>
              <input type="file" class="form-control" name="foto">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a href="{{ route('obat') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
          </div>
          
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection