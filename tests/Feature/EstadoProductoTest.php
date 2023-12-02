<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Producto;

class EstadoProductoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function devuelve_el_estado_200_para_productos_existente()
    {
        // Crear un producto para la prueba
        $producto = Producto::factory()->create();

        // Visitar la ruta de detalles del producto
        $response = $this->get("/productos/{$producto->id}");

        // Verificar que la respuesta tenga un código de estado HTTP 200
        $response->assertStatus(200);
    }

    /** @test */
    public function devuelve_el_estado_404_para_productos_que_no_existen()
    {
        // Intentar visitar la ruta de detalles de un producto que no existe
        $response = $this->get('/productos/999');

        // Verificar que la respuesta tenga un código de estado HTTP 404
        $response->assertStatus(404);
    }
}
