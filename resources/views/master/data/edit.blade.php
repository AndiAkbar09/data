@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('master.data.update', $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        
                        <div class="row">
                                                    
                                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="">
                                </div>
                                {{$errors->first('nama')}}
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" value="{{$data->alamat}}"class="form-control" id="">
                                </div>
                                {{$errors->first('alamat')}}
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" id="">
                                </div>
                                {{$errors->first('image')}}
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">No Telpon</label>
                                    <input type="text" name="no_telp" value="{{$data->no_telp}}" class="form-control" id="">
                                </div>
                                {{$errors->first('no_telp')}}
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <input type="text" name="gender" value="{{$data->gender}}"class="form-control" id="">
                                </div>
                                {{$errors->first('gender')}}
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <input type="text" name="agama" value="{{$data->agama}}"class="form-control" id="">
                                </div>
                                {{$errors->first('agama')}}
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir"value="{{$data->tgl_lahir}}"class="form-control" id="">
                                </div>
                                {{$errors->first('tgl_lahir')}}
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tempat Lahir </label>
                                    <input type="text" name="tmpt_lahir"value="{{$data->tmpt_lahir}}"class="form-control" id="">
                                </div>
                                {{$errors->first('tmpt_lahir')}}
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah"value="{{$data->asal_sekolah}}"class="form-control" id="">
                                </div>
                                {{$errors->first('asal_sekolah')}}
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Ibu</label>
                                    <input type="text" name="nama_ibu"value="{{$data->nama_ibu}}"class="form-control" id="">
                                </div>
                                {{$errors->first('nama_ibu')}}
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Ayah</label>
                                    <input type="text" name="nama_ayah"value="{{$data->nama_ayah}}"class="form-control" id="">
                                </div>
                                {{$errors->first('nama_ayah')}}
                            </div>                      
                            
                            <div class="px-3 py-4">
                                <button type="submit" class="btn btn-outline-info">Kirim Pendaftaran</button>
                                <a href="{{route('master.data')}}" type="submit" class="btn btn-outline-secondary">Kembali</a>                       
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
