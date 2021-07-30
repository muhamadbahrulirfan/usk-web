@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">FORM EDIT BUKU</div>

                <div class="card-body">
                @foreach($edit as $e)
                <form action="{{ route('update',$e->id_buku)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('patch')}}
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" placeholder="Masukan Judul Buku" class="form-control" required="" value="{{$e->judul}}">
                    </div>
                    <div class="form-group">
                        <label>Deskirpsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Masukan Deskirpsi Buku" >
                          {{$e->deskripsi}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang" placeholder="Masukan pengarang Buku" class="form-control" required="" value="{{$e->pengarang}}">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" placeholder="Masukan penerbit Buku" class="form-control" required="" value="{{$e->penerbit}}">
                    </div>
                    <div class="form-group">
                        <label>Persediaan</label>
                        <input type="number" name="persediaan" placeholder="Masukan Persediaan Buku" class="form-control" required="" value="{{$e->persediaan}}">
                    </div>
                     <div class="form-group">
                        <label>Gambar</label>
                        <br>
                        <img style="height: 250px; width: 200px; object-fit: cover; object-position: center;" src="{{asset('images/'.$e->gambar)}}" class="img-thumbnail">
                        <br><br>
                        <input type="file" name="gambar" value="{{$e->gambar}}">
                        <p style="color: grey;">Kosongi gambar jika tidak ingin mengubahnya</p>
                    </div> 
                    <div class="form-group">
                        <input type="submit" name="edit" class="btn btn-success form-control" value="Simpan">
                    </div>
                    
                </form>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
