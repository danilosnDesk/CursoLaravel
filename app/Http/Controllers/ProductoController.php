<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Producto;

class ProductoController extends Controller
{

    /**
     * Display a listing of the resource.
     */

   public function index(): Response
    {
        $productos = Producto::paginate(3);
        return response( view('admin.producto.productos', compact('productos')));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id): RedirectResponse
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('admin.productos')->with('Sucesso','Producto eliminado com sucesso..!');
    }
}
