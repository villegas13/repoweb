<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $equipos = Equipo::when($q, function ($query, $q) {
                $query->where('nombre', 'like', "%{$q}%")
                      ->orWhere('marca', 'like', "%{$q}%")
                      ->orWhere('modelo', 'like', "%{$q}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        // La vista de lista actual es resources/views/vista.blade.php
        return view('vista', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function resultados()
    {
        $equipos = Equipo::orderByDesc('puntos')
            ->orderByDesc('diferencia_goles')
            ->orderByDesc('goles_favor')
            ->get();

        // asignar posiciones según orden actual
        $pos = 1;
        foreach ($equipos as $equipo) {
            $equipo->posicion = $pos++;
        }

        return view('equipos.resultados', compact('equipos'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'marca'  => 'nullable|string|max:255',
            'modelo' => 'nullable|string|max:255',
            'estado' => 'required|in:disponible,no disponible',
        ]);

        Equipo::create($data);

        return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente.');
    }

    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'marca'  => 'nullable|string|max:255',
            'modelo' => 'nullable|string|max:255',
            'estado' => 'required|in:disponible,no disponible',
        ]);

        $equipo->update($data);

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado correctamente.');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente.');
    }
}
