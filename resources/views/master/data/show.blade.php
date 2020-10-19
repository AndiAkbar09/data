@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row">               
                                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" value="{{$data->alamat}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Image</label>
                                        <img src="{{asset('storage/'.$data->image)}}" alt="" widht="30px" height="30px">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">No Telpon</label>
                                    <input type="text" name="no_telp" value="{{$data->no_telp}}" class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <input type="text" name="gender" value="{{$data->gender}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <input type="text" name="agama" value="{{$data->agama}}"class="form-control" id="" readonly>
                                </div>
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir"value="{{$data->tgl_lahir}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tempat Lahir </label>
                                    <input type="text" name="tmpt_lahir"value="{{$data->tmpt_lahir}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah"value="{{$data->asal_sekolah}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Ibu</label>
                                    <input type="text" name="nama_ibu"value="{{$data->nama_ibu}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Ayah</label>
                                    <input type="text" name="nama_ayah"value="{{$data->nama_ayah}}"class="form-control" id="" readonly>
                                </div>
                            </div>                      
                            
                            <div class="px-3 py-4">

                                <a href="{{route('master.data')}}" type="submit" class="btn btn-outline-info">Kembali</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
