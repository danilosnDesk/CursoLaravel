<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    public function getUser(){

        return $this->belongsTo(User::class, 'id_user');
    }

    public function getCategoria(){

        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}