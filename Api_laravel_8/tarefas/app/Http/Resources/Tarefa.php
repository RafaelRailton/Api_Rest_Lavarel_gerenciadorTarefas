<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tarefa extends JsonResource
{
   
    public function toArray($request)
    {
        return [
             'id' => $this->id,
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'image' => $this->image,
            'data' => $this->data
          ];
    }
}
