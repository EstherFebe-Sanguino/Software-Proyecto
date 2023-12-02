<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Producto;

class RenderizacionTest extends TestCase
{
    // RENDERIZACION
    public function test_example(): void
    {
        // Crear algunos productos para la prueba
        Producto::factory()->count(3)->create();

        // Visitar la ruta que renderiza la vista de productos
        $response = $this->get('/productos');

        // Verificar que la vista fue renderizada exitosamente (código de respuesta 200)
        $response->assertStatus(200);

        // Verificar que la vista contiene los datos esperados
        foreach (Producto::all() as $producto) {
            $response->assertSee($producto->nombreproducto);
            // Puedes agregar más verificaciones según los datos que esperas en tu vista
        }
    }
}
