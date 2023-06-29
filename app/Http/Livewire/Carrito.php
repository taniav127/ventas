<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Carrito extends Component
{
    public $productos = [];
    protected $listeners = ['addCarrito'];


    public function addCarrito($id)
    {
        if (isset($this->productos[$id])) {
            $this->productos[$id]++;
        } else {
            $this->productos[$id] = 1;
        }

        session(['carrito' => $this->productos]);
        
    }


    public function render()
    {
        $productosCarrito = Producto::whereIn('id', array_keys($this->productos))->get();

        return view('livewire.carrito', [
            'productosCarrito' => $productosCarrito
        ]);
    }

    public function mount()
    {

        $this->productos = session('carrito', []);
    }
}
