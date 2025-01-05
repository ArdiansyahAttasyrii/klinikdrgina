@extends('layouts.index')
@section('title','Tambah Janji Temu')
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
        <form action="{{ route('janjitemu.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $janjitemu->nama }}" placeholder="Masukkan Nama">
              </div>
              <div class="form-group">
                <label for="tanggal_temu">Tanggal Temu</label>
                <input type="date" class="form-control" name="tanggaltemu" value="{{ $janjitemu->tanggal_temu }}" placeholder="Masukkan Tanggal">
              </div>
              <div class="form-group">
                <label for="noTelpon">No Telpon</label>
                <input type="numeric" class="form-control" name="notelpon" value="{{ $janjitemu->no_telpon }}" placeholder="Masukkan No Telpon">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $janjitemu->email }}" placeholder="Masukkan Email">
              </div>
              <div class="form-group">
                <label for="noAntrian">No Antrian</label>
                <input type="numeric" class="form-control" name="noAntrian" value="{{ $janjitemu->no_antrian }}" placeholder="Masukkan No Antrian">
              </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a href="{{ route('janjitemu') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
          </div>
          
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection