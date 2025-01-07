@extends('layouts.index')
@section('title','Edit Treatment')
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
        <form action="{{ route('pasien.update', $pasien->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="name"  placeholder="Masukkan Nama Anda">
              </div>
            <div class="form-group">
                <label for="tgl">Tempat, Tanggal Lahir</label>
                <input type="date" class="form-control" name="tempat_tanggallahir"  placeholder="Masukkan Tanggal Lahir Anda">
              </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" name="alamat"  placeholder="Masukkan Alamat Anda">
            </div>
            <div class="form-group">
              <label for="kontak">Kontak</label>
              <input type="number" class="form-control" name="kontak"  placeholder="Masukkan Kontak">
            </div>
            <div class="form-group">
              <label for="fotoPasien">Foto Pasien</label>
              <input type="file" class="form-control" name="foto">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a href="{{ route('pasien') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
          </div>
          
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection