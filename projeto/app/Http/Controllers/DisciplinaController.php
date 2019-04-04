<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;

class DisciplinaController extends Controller
{
  private $disciplina;
  public function __construct(Disciplina $disciplina){
    $this->disciplina = $disciplina;
  }
  public function index(Disciplina $disciplina){
    $disciplinas = $disciplina->all();
    return view('listagemdisciplinas',compact('disciplinas'));
  }
  public function create(){
    return view('cadastrodisciplina');
  }
  public function store(Request $request){
    //$disciplina = new Disciplina();
    $dados = $request->all();
    $this->validate($request,$this->disciplina->rules);
    $insert = $this->disciplina->create($dados);
    if($insert)
      return redirect()->route('disciplinas.index');
    else
      return redirect()->route('disciplinas.create');
  }
  public function edit($id){
    $disciplina = $this->disciplina->find($id);
    return view('editarcadastrodisciplina',compact('disciplina'));
  }
  public function update(Request $request,$id){
    $dados = $request->all();
    $this->validate($request,$this->disciplina->rules);
    $disciplina = $this->disciplina->find($id);
    $update = $disciplina->update($dados);
    if($update)
      return redirect()->route('disciplinas.index');
    else
      return redirect()->route('disciplinas.edit',$id)->with(['errors' => 'FALHA AO EDITAR']);
  }
  public function show($id){
    $disciplina = $this->disciplina->find($id);
    return view('visualizardisciplina',compact('disciplina'));
  }
  public function destroy($id){
    $disciplina = $this->disciplina->find($id);
    $delete = $disciplina->delete();
    if($delete)
      return redirect()->route('disciplinas.index');
    else {
      return redirect()->route('disciplinas.show',$id)->with(['errors' => 'FALHA AO TENTAR DELETAR']);
    }
  }
}
