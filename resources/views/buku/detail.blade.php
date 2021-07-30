@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">FORM DETAIL BUKU</div>

                <div class="card-body">
                    
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
            <div class="col-sm-12 col-lg-4">
                <div class="border m-3 py-1 px-2">
                    <h5 class="text-center m-2"><b>Gambar</b></h5>
                    <img src="{{asset('images/'.$detail->gambar)}}" class="img-thumbnail" width="100%" height="100%">
                </div>
            </div>
            <div class="col-sm-12 col-lg-8">
               <table class="table table-striped table-responsive-sm">
                    <tbody>
                    <tr>
                        <th style="width: 20%">ID Buku</th>
                        <td style="width: 5%">:</td>
                        <td>{{$detail->id_buku}}</td>
                    </tr>
                    <tr>
                        <th>Judul Buku</th>
                        <td style="width: 5%">:</td>
                        <td>{{$detail->judul}}</td>
                    </tr>
                    <tr>
                        <th>Pengarang</th>
                        <td style="width: 5%">:</td>
                        <td>{{$detail->pengarang}}</td>
                    </tr>
                    <tr>
                        <th>Penerbit</th>
                        <td style="width: 5%">:</td>
                        <td>{{$detail->penerbit}}</td>
                    </tr>
                    <tr>
                        <th>Persediaan</th>
                        <td style="width: 5%">:</td>
                        <td>{{$detail->persediaan}}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi Buku</th>
                        <td style="width: 5%">:</td>
                        <td>{{$detail->deskripsi}}</td>
                    </tr>
                    </tbody>
                    </table> 
            </div>
        </div>
                              
                    
                        
                    <div class="form-group ml-3">
                        <a href="{{route('buku')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                    
                </form>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
