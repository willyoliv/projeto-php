<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    protected $table = 'diretores';
    protected $fillable = ['name','cpf','email','nascimento','password'];
    public $rules = [
      'name'=>'required|min:3|max:100',
      'cpf'=>'required|min:11|max:11',
      'email'=>'required|min:12|max:40',
      'nascimento'=>'required',
    ];
}
