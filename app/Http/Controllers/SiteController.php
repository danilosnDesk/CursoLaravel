<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


use App\Models\Producto;
use App\Models\Categoria;


class SiteController extends Controller
{
        public function index(): Response
    {

        $productos=Producto::paginate(4);
        return Response(view('Home', compact('productos')));
    }


        public function details($slug): Response
         {

        $producto=Producto::where('slug', $slug)->first();
        return Response(view('details', compact('producto')));
    }

    public function getCategoria($id)
    {
        $Categoria = Categoria::find($id);
         $productos=Producto::where('id_categoria', $id)->paginate(3);
        return Response(view('categoria', compact('productos', 'Categoria')));
    }
}