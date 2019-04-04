<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    private $aluno;
    public function __construct(Aluno $aluno){
      $this->aluno = $aluno;
    }
    public function index(Aluno $aluno){
      $alunos = $aluno->all();
      return view('listagemalunos',compact('alunos'));
    }
    public function create(){
      return view('cadastroaluno');
    }
    public function store(Request $request){
      //$aluno = new Aluno();
      $dados = $request->all();
      $this->validate($request,$this->aluno->rules);
      $insert = $this->aluno->create($dados);
      if($insert)
        return redirect()->route('alunos.index');
      else
        return redirect()->route('alunos.create');
    }
    public function edit($id){
      $aluno = $this->aluno->find($id);
      return view('editarcadastroaluno',compact('aluno'));
    }
    public function update(Request $request,$id){
      $dados = $request->all();
      $this->validate($request,$this->aluno->rules);
      $aluno = $this->aluno->find($id);
      $update = $aluno->update($dados);
      if($update)
        return redirect()->route('alunos.index');
      else
        return redirect()->route('alunos.edit',$id)->with(['errors' => 'FALHA AO EDITAR']);
    }
    public function show($id){
      $aluno = $this->aluno->find($id);
      return view('visualizaraluno',compact('aluno'));
    }
    public function destroy($id){
      $aluno = $this->aluno->find($id);
      $delete = $aluno->delete();
      if($delete)
        return redirect()->route('alunos.index');
      else {
        return redirect()->route('alunos.show',$id)->with(['errors' => 'FALHA AO TENTAR DELETAR']);
      }
    }
}
