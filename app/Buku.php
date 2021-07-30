<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table ='tb_buku';
    protected $fillable = ['id_buku','judul','deskripsi','pengarang','penerbit','persediaan','gambar'];
    protected $primaryKey = 'id_buku';
}
