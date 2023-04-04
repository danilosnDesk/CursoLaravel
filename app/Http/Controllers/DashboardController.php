<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Producto;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all()->count();


        // Gráfico 1
        $categorias = Categoria::with('productos')->get();

        // Preparar array
        foreach($categorias as $categoria){
            $catNome[] = "'".$categoria->nome."'";
            $catTotal_[] = $categoria->productos->count();
        }


        // formatar para gráfico
        $catLabel = implode(',',$catNome);
        $catTotal = implode(',',$catTotal_);
        $cat_prodTota = 0;

        for ($i=0; $i < count($catTotal_); $i++) {
            $cat_prodTota += $catTotal_[$i];
        }


        return view('admin.dashboard', compact('users','catLabel','catTotal','cat_prodTota'));
    }
}
