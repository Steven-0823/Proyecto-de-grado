<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Pqr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PqrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $user = Auth::user();

    if ($user->isAdmin()) {
        // Si el usuario es administrador, obtener todas las PQRs con el nombre del usuario
        $pqrs = DB::table('pqrs')
            ->join('categories', 'pqrs.categoria_id', '=', 'categories.id')
            ->join('users', 'pqrs.email', '=', 'users.email')
            ->select('pqrs.*', 'categories.name as nombre_categoria', 'users.name as nombre_usuario')
            ->get();
    } else {
        // Si no es administrador, obtener solo las PQRs asociadas al email del usuario
        $pqrs = DB::table('pqrs')
            ->join('categories', 'pqrs.categoria_id', '=', 'categories.id')
            ->join('users', 'pqrs.email', '=', 'users.email')
            ->where('pqrs.email', $user->email)
            ->select('pqrs.*', 'categories.name as nombre_categoria', 'users.name as nombre_usuario')
            ->get();
    }

    return view('pqrs.index', ['pqrs' => $pqrs]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('pqrs.new', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'imagen_pqr' => 'required|url',
        'descripcion' => 'required|string',
        'categoria_id' => 'required|exists:categories,id',
    ]);

    $pqr = new Pqr();
    $pqr->imagen_pqr = $request->imagen_pqr;
    $pqr->descripcion = $request->descripcion;
    $pqr->categoria_id = $request->categoria_id;
    $pqr->email = Auth::user()->email;  // Almacenar el email del usuario autenticado

    $pqr->save();

    if ($request->ajax()) {
        return response()->json([
            'success' => true,
            'message' => 'PQR creado correctamente'
        ]);
    }

    return redirect()->route('pqr.index')->with('success', 'PQR creado correctamente');
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $pqr = Pqr::find($id);
    $categorias = Categoria::all();
    $usuario = DB::table('users')->where('email', $pqr->email)->first();

    return view('pqrs.edit', [
        'pqr' => $pqr,
        'categorias' => $categorias,
        'usuario' => $usuario
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'imagen_pqr' => 'required|url',
            'descripcion' => 'required|string',
            'categoria_id' => 'required|exists:categories,id',
        ]);

        $pqr = Pqr::find($id);
        $pqr->imagen_pqr = $request->imagen_pqr;
        $pqr->descripcion = $request->descripcion;
        $pqr->categoria_id = $request->categoria_id;
        
        // Guardar los cambios en la base de datos
        $pqr->save();
    
        // Redirigir a la ruta index después de actualizar el PQR
        return redirect()->route('pqr.index')->with('success', 'PQR actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pqr = Pqr::find($id);
        $pqr->delete();
        
        // Redirigir a la ruta index después de eliminar el PQR
        return redirect()->route('pqr.index')->with('success', 'PQR eliminado correctamente');
    }
}