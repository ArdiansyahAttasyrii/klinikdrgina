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
        <form action="{{ route('treatment.update', $treatment->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="namaTreatment">Nama Treatment</label>
              <input type="text" class="form-control" name="nama" value="{{ $treatment->name }}" placeholder="Masukkan Nama Treatment">
            </div>
            <div class="form-group">
              <label for="harga">Harga Treatment</label>
              <input type="number" class="form-control" name="harga" value="{{ $treatment->harga }}" placeholder="Masukkan Harga Treatment">
            </div>
            <div class="form-group">
              <label for="fotoTreatment">Foto Treatment</label>
              <input type="file" class="form-control" name="foto">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a href="{{ route('treatment') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
          </div>
          
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection