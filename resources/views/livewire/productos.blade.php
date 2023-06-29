<div>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200">Nombre</th>
                        <th class="py-2 px-4 border-b border-gray-200">Descripcion</th>
                        <th class="py-2 px-4 border-b border-gray-200">precio</th>
                        <th class="py-2 px-4 border-b border-gray-200"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $producto->nombre }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $producto->descripcion }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $producto->precio }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                <button type="button"
                                    class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                                    wire:click="addCarrito({{ $producto->id }})"
                                    onclick="agregarProducto('{{ $producto->nombre }}', '{{ $producto->precio }}')">agregar</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function agregarProducto(nombre, precio) {
        Swal.fire({
            title: '¡Producto agregado!',
            html: 'El producto <b>' + nombre + '</b> ha sido agregado al carrito con un precio de <b>$' +
                precio + '</b>.',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>
