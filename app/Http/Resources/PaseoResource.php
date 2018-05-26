<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaseoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'type'      =>  'paseos',
            'id'        =>  (string)$this->id,
            'atributes' => [
                'name'          =>  $this->name,
                'fecha'         =>  (string)$this->fecha,
                'localizacion'  =>  $this->localizacion,
                'latitud'       =>  (string)$this->latitud,
                'longitud'      =>  (string)$this->longitud,
                'telefono'      =>  $this->telefono,
                'website'       =>  $this->website,
                'descripcion'   =>  $this->descripcion,
                'imagen'        =>  (string)$this->imagen,
                'costo'         =>  (string)$this->costo,
                'categoria_id'  =>  (string)$this->categoria_id,
            ],
        ];
    }
}