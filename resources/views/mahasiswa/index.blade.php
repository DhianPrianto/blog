@extends('layout.main')

@section('title', 'Daftar Mahasiswa')
 @section('container') 
    <div class="container">
        <div class="row">
            <div class="col-10">
            <h1 class="mt-3">Daftar mahasiswa</h1>
            
            <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</div> 
                            <th scope="col">Nama</div> 
                            <th scope="col">NIM</div> 
                            <th scope="col">Email</div> 
                            <th scope="col">Jurusan</div> 
                            <th scope="col">Aksi</div> 
                        </tr>
                    </thead>
                    
                    <tbody">
                        <tbody>
                                @foreach( $mahasiswa as $mhs )
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <th>{{ $mhs->nama}}</th>
                                    <th>{{ $mhs->nim}}</th>
                                    <th>{{ $mhs->email}}</th>
                                    <th>{{ $mhs->jurusan}}</th>
                                    <td>
                                        <a href="" class="badge badge-success">edit</a>
                                        <a href="" class="badge badge-danger">delete</a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
@endsection