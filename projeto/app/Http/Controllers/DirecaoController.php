<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diretor;

class DirecaoController extends Controller
{
  private $diretor;
  public function __construct(Diretor $diretor){
    $this->diretor = $diretor;
  }
  public function index(Diretor $diretor){
    $diretores = $diretor->all();
    return view('listagemdiretores',compact('diretores'));
  }
  public function create(){
    return view('cadastrodiretor');
  }
  public function store(Request $request){
    //$diretor = new Diretor();
    $dados = $request->all();
    $this->validate($request,$this->diretor->rules);
    $insert = $this->diretor->create($dados);
    if($insert)
      return redirect()->route('diretores.index');
    else
      return redirect()->route('diretores.create');
  }
  public function edit($id){
    $diretor = $this->diretor->find($id);
    return view('editarcadastrodiretor',compact('diretor'));
  }
  public function update(Request $request,$id){
    $dados = $request->all();
    $this->validate($request,$this->diretor->rules);
    $diretor = $this->diretor->find($id);
    $update = $diretor->update($dados);
    if($update)
      return redirect()->route('diretores.index');
    else
      return redirect()->route('diretores.edit',$id)->with(['errors' => 'FALHA AO EDITAR']);
  }
  public function show($id){
    $diretor = $this->diretor->find($id);
    return view('visualizardiretor',compact('diretor'));
  }
  public function destroy($id){
    $diretor = $this->diretor->find($id);
    $delete = $diretor->delete();
    if($delete)
      return redirect()->route('diretores.index');
    else {
      return redirect()->route('diretores.show',$id)->with(['errors' => 'FALHA AO TENTAR DELETAR']);
    }
  }
}
