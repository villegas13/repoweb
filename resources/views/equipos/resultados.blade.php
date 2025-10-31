<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultados - Equipos</title>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] p-6">
    <div class="w-full lg:max-w-6xl max-w-[1000px] bg-white dark:bg-[#161615] rounded-lg p-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-medium">Tabla de Posiciones</h1>
            <a href="{{ route('equipos.index') }}" class="px-3 py-1 border rounded-sm">Volver</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left border-collapse">
                <thead>
                    <tr class="text-[13px] text-[#706f6c] border-b">
                        <th class="px-3 py-2">Pos</th>
                        <th class="px-3 py-2">Equipo</th>
                        <th class="px-3 py-2">PJ</th>
                        <th class="px-3 py-2">G</th>
                        <th class="px-3 py-2">E</th>
                        <th class="px-3 py-2">P</th>
                        <th class="px-3 py-2">GF</th>
                        <th class="px-3 py-2">GC</th>
                        <th class="px-3 py-2">DG</th>
                        <th class="px-3 py-2">Pts</th>
                        <th class="px-3 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($equipos as $equipo)
                        <tr class="border-t">
                            <td class="px-3 py-2 align-top">{{ $equipo->posicion ?? '-' }}</td>
                            <td class="px-3 py-2 align-top">{{ $equipo->nombre }}</td>
                            <td class="px-3 py-2 align-top">{{ $equipo->partidos_jugados }}</td>
                            <td class="px-3 py-2 align-top">{{ $equipo->juegos_ganados }}</td>
                            <td class="px-3 py-2 align-top">{{ $equipo->juegos_empatados }}</td>
                            <td class="px-3 py-2 align-top">{{ $equipo->juegos_perdidos }}</td>
                            <td class="px-3 py-2 align-top">{{ $equipo->goles_favor }}</td>
                            <td class="px-3 py-2 align-top">{{ $equipo->goles_contra }}</td>
                            <td class="px-3 py-2 align-top">{{ $equipo->diferencia_goles }}</td>
                            <td class="px-3 py-2 align-top">{{ $equipo->puntos }}</td>
                            <td class="px-3 py-2 align-top">
                                <a href="{{ route('equipos.edit', $equipo) }}" class="px-2 py-1 border rounded-sm text-[13px]">Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11" class="px-3 py-6 text-center text-sm text-[#706f6c]">
                                No hay datos.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
