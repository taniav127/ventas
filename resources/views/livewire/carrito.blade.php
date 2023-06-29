<div class="bg-white rounded-lg p-6">
  <h1 class="text-center font-bold mb-4">Carrito de Compras</h1>

  @php
      $total = 0;
  @endphp

  @foreach ($productosCarrito as $producto)

      <div class="flex flex-col bg-gray-200 px-1 py-2 rounded-lg mb-4">
          <div class="font-semibold">Producto:
              <span class="text-gray-600">{{ $producto['nombre'] }}</span>
          </div>
          <div class="font-semibold">Precio:
              <span class="text-gray-600"> ${{ $producto['precio'] }}</span>
          </div>
          <div class="font-semibold">Cantidad:
              <span class="text-gray-600 mt-1"> {{ $productos[$producto['id']] }}</span>
          </div>
      </div>
      @php
          $subtotal = $producto['precio'] * $productos[$producto['id']];
          $total += $subtotal;
      @endphp
  @endforeach

  <div class="flex items-center justify-between mt-4">
      <span class="font-semibold">Total:</span>
      <span class="text-gray-600">${{ number_format($total, 2) }}</span>
  </div>

  <div class="flex items-center justify-center mt-4">
    
      <button
          class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Ir
          al carrito</button>
  </div>
</div>
