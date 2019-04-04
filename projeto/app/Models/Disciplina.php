<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
  protected $fillable = ['name','criacao'];
  public $rules = [
    'name'=>'required|min:3|max:100',
    'criacao'=>'required',
  ];
}
