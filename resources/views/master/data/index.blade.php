@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="d-flex px-2 py-2">
                        <div>
                            <a href="{{route('master.data.create')}}" class="btn btn-outline-primary">Buat Data Baru</a>
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No Telpon</th>
                                    <th>Agama</th>
                                    <th>Gender</th>
                                    <th>Asal Sekolah</th>
                                    <th>Image</th>
                                    <th>Option</th>
                                </tr>        
                            </thead>
                            <tbody>
                                    @foreach($datas as $d)
                                <tr>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->no_telp}}</td>
                                    <td>{{$d->agama}}</td>
                                    <td>{{$d->gender}}</td>
                                    <td>{{$d->asal_sekolah}}</td>
                                    <td>
                                        <img src="{{asset('storage/'.$d->image)}}" alt="" class="rounded" width="50px" heigth="10px ">    
                                    </td>
                                    <td>
                                        <form action="{{route('master.data.delete', $d->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('master.data.edit', $d->id)}}" class="btn btn-outline-info">Edit Data</a>
                                            <a href="{{route('master.data.show', $d->id)}}" class="btn btn-outline-success">Lihat Data</a>
                                            <button href="" class="btn btn-outline-danger">Hapus Data</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection