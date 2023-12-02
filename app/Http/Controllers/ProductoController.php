<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $title = __("Agregar producto");
        $route = route('productos.store');
        $producto = new Producto;
        $textButton = __("Registrar");
        return view('productos.create', compact('title','route', 'producto', 'textButton'));
    
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "nombreproducto"    =>  "required",
            "descripcion"       =>  "required",
            "precio"            =>  "required",
        ]);
        Producto::create($request->all());

        return redirect()->route("productos.index")->with("success", "Agregado con exito!!");
    }

    public function edit(Producto $producto)
    {
        $update =true;
        $title = __("Editar registro");
        $textButton = __("Actualizar");
        $route = route('productos.update', ["producto"=> $producto]);

        return view('productos.edit', compact('update', 'title', 'textButton', 'route', 'producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $this->validate($request, [
            "nombreproducto"    =>  "required",
            "descripcion"       =>  "required",
            "precio"            =>  "required",
        ]);
        $producto->fill($request->all())->update();

        return redirect()->route("productos.index")->with("success", "Actualizado con exito!!");
    }
    public function show($id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            abort(404, 'Producto no encontrado');
        }

        return view('productos.detalle', ['producto' => $producto]);
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        
        return back();
    }
}
