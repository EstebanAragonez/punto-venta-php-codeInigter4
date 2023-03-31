<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriasModel;

class Categorias extends BaseController
{

    protected $categorias;

    public function __construct()
    {
        $this->categorias = new CategoriasModel();
    }

    public function uni($activo = 1)
    {
        $categorias = $this->categorias->where('activo', $activo)->findAll();
        $data = [
            'titulo'  => 'Categorias',
            'datos'  => $categorias,
        ];


        echo view('cabecera');
        echo view('categorias/categorias', $data);
        echo view('piepagina');
    }
    public function eliminados($activo = 0)
    {
        $categorias = $this->categorias->where('activo', $activo)->findAll();
        $data = [
            'titulo'  => 'categorias eliminadas',
            'datos'  => $categorias,
        ];


        echo view('cabecera');
        echo view('categorias/eliminados', $data);
        echo view('piepagina');
    }
    public function nuevo()
    {

        $data = [
            'titulo'  => 'Agregar Categoria'
        ];

        echo view('cabecera');
        echo view('categorias/nuevo', $data);
        echo view('piepagina');
    }
    public function insertar()
    {
        $this->categorias->save(['nombre' => 
        $this->request->getPost('nombre')]);
        return redirect()->to(base_url('/categorias'));
    }
    public function editar($id = null)
    {
        $unidad = $this->categorias->where('id', $id)->first();
        $data = [
            'titulo'  => 'Editar Categoria', 'datos' => $unidad
        ];

        echo view('cabecera');
        echo view('categorias/editar', $data);
        echo view('piepagina');
    }
    public function actualizar()
    {
        $this->categorias->update($this->request->getPost('id'), ['nombre' =>
        $this->request->getPost('nombre')]);
        return redirect()->to(base_url('/categorias'));
    }
    public function eliminar($id)
    {
        $this->categorias->update($id, ['activo'=> 0]);
        return redirect()->to(base_url('/categorias'));
    }
    public function reingresar($id)
    {
        $this->categorias->update($id, ['activo'=> 1]);
        return redirect()->to(base_url('/categorias'));
    }
}
