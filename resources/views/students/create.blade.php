@extends('layout.main')

@section('title', 'Form Tambah Data Mahasiswa')
 @section('container') 
    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

                 <form method="post" action="/students">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
                        @error('nama')<div class="invalid-feedback">{{ $message }}
                    </div>@enderror

                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan Nim" name="nim" value="{{old('nim')}}">@error('nim')<div class="invalid-feedback">{{ $message }}
                    </div>@enderror

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{old('email')}}">@error('email')<div class="invalid-feedback">{{ $message }}
                    </div>@enderror

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{old('jurusan')}}">@error('jurusan')<div class="invalid-feedback">{{ $message }}
                    </div>@enderror
                    
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>
            </div>
        </div>
    </div>
@endsection