<?php

namespace App\Http\Controllers;

use App\Models\Animal as Animal;
use App\Http\Resources\Animal as AnimalResource;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        $Animals = Animal::paginate(15);
        return AnimalResource::collection($Animals);
      }
    
      public function show($id){
        $Animal = Animal::findOrFail( $id );
        return new AnimalResource( $Animal );
      }
    
      public function store(Request $request){
        $Animal             = new Animal;
        $Animal->nome       = $request->input('nome');
       $Animal->idade       = $request->input('idade');
       $Animal->foto        = $request->input('foto');
       $Animal->informacoes_extra      = $request->input('informacoes_extra');
       $Animal->cidade      = $request->input('cidade');
       $Animal->estado      = $request->input('estado');
       $Animal->status      = $request->input('status');
       $Animal->user_id     = $request->input('user_id');
       $Animal->user_encontrou = $request->input('user_encontrou');
        if( $Animal->save() ){
          return new AnimalResource( $Animal );
        }
      }
    
       public function update(Request $request){
        $Animal = Animal::findOrFail( $request->id );
        $Animal->nome       = $request->input('nome');
        $Animal->idade       = $request->input('idade');
        $Animal->foto        = $request->input('foto');
        $Animal->informacoes_extra      = $request->input('informacoes_extra');
        $Animal->cidade      = $request->input('cidade');
        $Animal->estado      = $request->input('estado');
        $Animal->status      = $request->input('status');
        $Animal->user_id     = $request->input('user_id');
        $Animal->user_encontrou = $request->input('user_encontrou');
    
        if( $Animal->save() ){
          return new AnimalResource( $Animal );
        }
      } 
    
      public function destroy($id){
        $Animal = Animal::findOrFail( $id );
        if( $Animal->delete() ){
          return new AnimalResource( $Animal );
        }
    
      }
}
