@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA LIST BUKU</div>

                <div class="card-body">
                    <a href="{{route('create')}}" class="btn btn-primary">Tambah Buku</a>
                    <form action="{{route('search')}}" method="get" style="float: right;">
                        <input type="text" name="cari" placeholder="search">
                        <input type="submit" name="search" class="btn btn-success btn-sm" value="GO">
                    </form>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            @foreach($buku as $b)
                            <div class="col-md-3 mt-2">
                                <div class="card">

                                    <div class="card-body" align="center">
                                    <div class="row ml-1">
                                      <b>{{$b->judul}}</b>      
                                    </div><hr> 
                                    <div class="row justify-content-center">
                                      <a href="{{route('detail', $b->id_buku)}}">
                                          <img style="height: 250px; width: 200px; object-fit: cover; object-position: center;" src="{{asset('images/'.$b->gambar)}}" class="img-thumbnail" width="90%">
                                      </a>  
                                    </div><hr>
                                    <div class="row ml-1">
                                      <a href="{{route('detail', $b->id_buku)}}" class="btn btn-success btn-sm">DETAIL</a>
                                      <a href="{{route('edit', $b->id_buku)}}" class="btn btn-warning btn-sm ml-1">EDIT</a>
                                      <a href="{{route('delete', $b->id_buku)}}" class="btn btn-danger btn-sm ml-1">HAPUS</a>
                                    </div>

                                      
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="pagination mt-3">
            {!! $buku->links() !!}
        </div>
    </div>
</div>
@endsection
