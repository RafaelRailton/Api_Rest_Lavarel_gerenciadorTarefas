<?php

namespace App\Http\Controllers;

use App\Models\Tarefa as Tarefa;
use App\Http\Resources\Tarefa as TarefaResource;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        $tarefas = Tarefa::paginate(15);
        return TarefaResource::collection($tarefas);
      }
    
      public function show($id){
        $tarefa = Tarefa::findOrFail( $id );
        return new TarefaResource( $tarefa );
      }
    
      public function store(Request $request){
        $tarefa             = new Tarefa;
        $tarefa->titulo     = $request->input('titulo');
        
       $tarefa->descricao  = $request->input('descricao');
       $tarefa->image      = $request->input('image');
       $tarefa->data      = $request->input('data');
        if( $tarefa->save() ){
          return new TarefaResource( $tarefa );
        }
      }
    
       public function update(Request $request){
        $tarefa = Tarefa::findOrFail( $request->id );
        $tarefa->titulo     = $request->input('titulo');
        $tarefa->descricao  = $request->input('descricao');
        $tarefa->image      = $request->input('image');
        $tarefa->data      = $request->input('data');
    
        if( $tarefa->save() ){
          return new TarefaResource( $tarefa );
        }
      } 
    
      public function destroy($id){
        $tarefa = Tarefa::findOrFail( $id );
        if( $tarefa->delete() ){
          return new TarefaResource( $tarefa );
        }
    
      }
}
