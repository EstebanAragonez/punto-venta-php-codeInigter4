<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UnidadesModel;

class Unidades extends BaseController
{

    protected $unidades;

    public function __construct()
    {
        $this->unidades = new UnidadesModel();
    }

    public function uni($activo = 1)
    {
        $unidades = $this->unidades->where('activo', $activo)->findAll();
        $data = [
            'titulo'  => 'unidades',
            'datos'  => $unidades,
        ];


        echo view('cabecera');
        echo view('unidades/unidades', $data);
        echo view('piepagina');
    }
    public function eliminados($activo = 0)
    {
        $unidades = $this->unidades->where('activo', $activo)->findAll();
        $data = [
            'titulo'  => 'unidades eliminadas',
            'datos'  => $unidades,
        ];


        echo view('cabecera');
        echo view('unidades/eliminados', $data);
        echo view('piepagina');
    }
    public function nuevo()
    {

        $data = [
            'titulo'  => 'Agregar Unidad'
        ];

        echo view('cabecera');
        echo view('unidades/nuevo', $data);
        echo view('piepagina');
    }
    public function insertar()
    {
        $this->unidades->save(['nombre' => 
        $this->request->getPost('nombre'), 'nombre_corto' => 
        $this->request->getPost('nombre_corto')]);
        return redirect()->to(base_url('/unidades'));
    }
    public function editar($id = null)
    {
        $unidad = $this->unidades->where('id', $id)->first();
        $data = [
            'titulo'  => 'Editar unidad', 'datos' => $unidad
        ];

        echo view('cabecera');
        echo view('unidades/editar', $data);
        echo view('piepagina');
    }
    public function actualizar()
    {
        $this->unidades->update($this->request->getPost('id'), ['nombre' =>
        $this->request->getPost('nombre'), 'nombre_corto' =>
        $this->request->getPost('nombre_corto')]);
        return redirect()->to(base_url('/unidades'));
    }
    public function eliminar($id)
    {
        $this->unidades->update($id, ['activo'=> 0]);
        return redirect()->to(base_url('/unidades'));
    }
    public function reingresar($id)
    {
        $this->unidades->update($id, ['activo'=> 1]);
        return redirect()->to(base_url('/unidades'));
    }
}
