@extends('layouts.index')
@section('title','Tambah Diagnosa')
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
        <form action="{{ route('diagnosa.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="tanggal">Tanggal Diagnosa</label>
              <input type="date" class="form-control" name="tanggal"  placeholder="Masukkan Tanggal Diagnosa">
            </div>
            <div class="form-group">
              <label for="keluhan">Keluhan</label>
              <input type="text" class="form-control" name="keluhan"  placeholder="Masukkan Keluhan Pasien">
            </div>
            <div class="form-group">
              <label for="hasil_diagnosa">Hasil Diagnosa</label>
              <input type="text" class="form-control" name="hasil_diagnosa"  placeholder="Masukkan Hasil Diagnosa">
            </div>
            <div class="form-group">
              <label for="tindakan">Tindakan</label>
              <input type="text" class="form-control" name="tindakan"  placeholder="Masukkan Tindakan">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a href="{{ route('diagnosa') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
          </div>
          
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection