<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;


class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurantes = DB::table('restaurantes')
            ->join('categories', 'restaurantes.categoria_id', '=', 'categories.id')
            ->select('restaurantes.*', 'categories.name as nombre_categoria')
            ->get();
        
        return view('restaurantes.index', ['restaurantes' => $restaurantes]);
    }
    public function pdf()
    {
        $restaurantes = Restaurante::all();
        $pdf = Pdf::loadView('restaurantes.pdf', compact('restaurantes'));
        return $pdf->stream();
        //return view('lugares.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurantes = Restaurante::all();
        $categorias = Categoria::all();
        return view('restaurantes.new', ['restaurantes' => $restaurantes, 'categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'direccion' => 'required|string|max:255',
            'imagen' => 'required|url',
            'categoria_id' => 'required|exists:categories,id',
            'telefono' => 'nullable|string|max:20',
            'horario_apertura' => 'required',
            'horario_cierre' => 'required',
        ]);

        $restaurante = new Restaurante();
        $restaurante->name = $request->name;
        $restaurante->descripcion = $request->descripcion;
        $restaurante->direccion = $request->direccion;
        $restaurante->imagen = $request->imagen;
        $restaurante->categoria_id = $request->categoria_id;
        $restaurante->telefono = $request->telefono;
        $restaurante->horario_apertura = $request->horario_apertura . ':00';
        $restaurante->horario_cierre = $request->horario_cierre . ':00';

        $restaurante->save();

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Restaurante creado correctamente']);
        }

        return redirect()->route('restaurante.index')->with('success', 'Restaurante creado correctamente');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $restaurante = Restaurante::find($id);
        $categorias = Categoria::all();
        return view('restaurantes.edit', ['restaurante' => $restaurante, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'direccion' => 'required|string|max:255',
        'imagen' => 'required|url',
        'categoria_id' => 'required|exists:categories,id',
        'telefono' => 'nullable|string|max:20',
        'horario_apertura' => 'required',
        'horario_cierre' => 'required',
    ]);

    $restaurante = Restaurante::find($id);

    if (!$restaurante) {
        return response()->json(['error' => 'Restaurante no encontrado'], 404);
    }

    $restaurante->name = $request->name;
    $restaurante->descripcion = $request->descripcion;
    $restaurante->direccion = $request->direccion;
    $restaurante->imagen = $request->imagen;
    $restaurante->categoria_id = $request->categoria_id;
    $restaurante->telefono = $request->telefono;
    $restaurante->horario_apertura = $request->horario_apertura;
    $restaurante->horario_cierre = $request->horario_cierre;
    
    // Guardar los cambios en la base de datos
    $restaurante->save();

    // Devolver una respuesta JSON exitosa
    return response()->json(['success' => true, 'message' => 'Restaurante actualizado correctamente']);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $restaurante = Restaurante::find($id);
        $restaurante->delete();
        
        // Redirigir a la ruta index después de eliminar el restaurante
        return redirect()->route('restaurante.index')->with('success', 'Restaurante eliminado correctamente');
    }
}
