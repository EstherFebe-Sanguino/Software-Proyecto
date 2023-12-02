<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Producto;

class ProductoTest extends TestCase
{
    // PRUEBA UNITARIA

    // PUEDE AGREGAR UN PRODUCTO? 
    public function test_example():void
    {
        
        $producto = Producto::create([
            'nombreproducto' => 'Producto de ejemplo',
            'descripcion' => 'Descripción de ejemplo',
            'precio' => 35,
        ]);

        $this->assertDatabaseHas('productos', [
            'id' => $producto->id,
            'nombreproducto'=> 'Producto de ejemplo',
            'descripcion' => 'Descripción de ejemplo',
            'precio' => 35,
        ]);

    }
}
