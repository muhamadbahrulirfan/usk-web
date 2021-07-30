@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">FORM TAMBAH BUKU</div>

                <div class="card-body">

                <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" placeholder="Masukan Judul Buku" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Deskirpsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Masukan Deskirpsi Buku" >
                            
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang" placeholder="Masukan pengarang Buku" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" placeholder="Masukan penerbit Buku" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Persediaan</label>
                        <input type="number" name="persediaan" placeholder="Masukan Persediaan Buku" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <br>
                        <input type="file" name="gambar" required="">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="tambah" class="btn btn-success" value="TAMBAH">
                    </div>
                    
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
