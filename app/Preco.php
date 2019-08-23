<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preco extends Model
{
    //
    protected $table = 'precos';
    public $primaryKey = 'id';
    protected $fillable = [
        'preco_matricula', 'preco_inscricao', 'grau'];
    public $timestamps = true;
}
