<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Productos extends Component
{

    public $productos;

    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.productos');
    }

    public function addCarrito($id)
    {
        $producto = $id;
        $this->emit('addCarrito', $producto);
    }
}
