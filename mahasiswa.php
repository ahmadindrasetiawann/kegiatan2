<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Siswa extends Model
{
    protected $table = "mahasiswa";
 
    protected $fillable = ['nama','nis','alamat'];
}