<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Animal extends JsonResource
{
   
    public function toArray($request)
    {
        return [
             'id' => $this->id,
            'nome' => $this->nome,
            'idade' => $this->idade,
            'foto' => $this->foto,
            'informacoes_extra' => $this->informacoes_extra,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'status' => $this->status,
            'user_id' => $this->user_id,
            'user_encontrou' => $this->user_encontrou
          ];
    }
}
