@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('master.data.save')}}" method="post" enctype="multipart/form-data"  >
                    @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        
                        <div class="row">
                                                    
                                                    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" id="">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">No Telpon</label>
                                    <input type="text" name="no_telp" class="form-control" id="">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <input type="text" name="gender" class="form-control" id="">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <input type="text" name="agama" class="form-control" id="">
                                </div>
                                              </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" id="">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tempat Lahir </label>
                                    <input type="text" name="tmpt_lahir" class="form-control" id="">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" id="">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" id="">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" id="">
                                </div>
                            </div>                        
                            
                            <div class="py-4 px-3">
                                    <button type="submit" class="btn btn-outline-info">Kirim Data Baru</button>
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
