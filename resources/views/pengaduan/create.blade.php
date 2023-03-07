@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="POST" action="{{ route('masyarakat.pengaduan.store') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="id_pengaduan" class="form-control" id="id pengaduan" placeholder="id pengaduan">
                    <label for="id pengaduan">id pengaduan</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" name="tgl_pengaduan" class="form-control" id="tanggal" placeholder="tanggal">
                    <label for="tanggal">tanggal</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nik" class="form-control" id="nik" placeholder="nik">
                    <label for="nik">nik</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="textarea"name="isi_pengaduan" class="form-control" id="isi pengaduan" placeholder="isi pengaduan">
                    <label for="isi pengaduan">isi pengaduan</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="file" name="foto[]" class="form-control" id="foto" placeholder="foto">
                    <label for="foto">foto</label>
                </div>

                   
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>  
</div>
@endsection
