<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
  private $docente;
  public function __construct(Docente $docente){
    $this->docente = $docente;
  }
  public function index(Docente $docente){
    $docentes = $docente->all();
    return view('listagemdocentes',compact('docentes'));
  }
  public function create(){
    return view('cadastrodocente');
  }
  public function store(Request $request){
    //$docente = new Docente();
    $dados = $request->all();
    $this->validate($request,$this->docente->rules);
    $insert = $this->docente->create($dados);
    if($insert)
      return redirect()->route('docentes.index');
    else
      return redirect()->route('docentes.create');
  }
  public function edit($id){
    $docente = $this->docente->find($id);
    return view('editarcadastrodocente',compact('docente'));
  }
  public function update(Request $request,$id){
    $dados = $request->all();
    $this->validate($request,$this->docente->rules);
    $docente = $this->docente->find($id);
    $update = $docente->update($dados);
    if($update)
      return redirect()->route('docentes.index');
    else
      return redirect()->route('docentes.edit',$id)->with(['errors' => 'FALHA AO EDITAR']);
  }
  public function show($id){
    $docente = $this->docente->find($id);
    return view('visualizardocente',compact('docente'));
  }
  public function destroy($id){
    $docente = $this->docente->find($id);
    $delete = $docente->delete();
    if($delete)
      return redirect()->route('docentes.index');
    else {
      return redirect()->route('docentes.show',$id)->with(['errors' => 'FALHA AO TENTAR DELETAR']);
    }
  }
}
