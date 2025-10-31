<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver equipo</title>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] p-6">
    <div class="w-full lg:max-w-4xl max-w-[800px] bg-white dark:bg-[#161615] rounded-lg p-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-medium">Equipo #{{ $equipo->id }} - {{ $equipo->nombre }}</h1>
            <div class="flex gap-2">
                <a href="{{ route('equipos.edit', $equipo) }}" class="px-3 py-1 border rounded-sm">Editar</a>
                <a href="{{ route('equipos.index') }}" class="px-3 py-1 border rounded-sm">Volver</a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-[#1b1b18]">
            <div>
                <p><strong>Nombre:</strong> {{ $equipo->nombre }}</p>
                <p><strong>Marca:</strong> {{ $equipo->marca ?? '-' }}</p>
                <p><strong>Modelo:</strong> {{ $equipo->modelo ?? '-' }}</p>
                <p><strong>Estado:</strong> {{ ucfirst($equipo->estado ?? 'desconocido') }}</p>
                <p><strong>Creado:</strong> {{ $equipo->created_at?->format('Y-m-d H:i') }}</p>
                <p><strong>Actualizado:</strong> {{ $equipo->updated_at?->format('Y-m-d H:i') }}</p>
            </div>

            <div>
                <h2 class="font-medium mb-2">Estadísticas</h2>
                <p><strong>Posición:</strong> {{ $equipo->posicion ?? '-' }}</p>
                <p><strong>PJ:</strong> {{ $equipo->partidos_jugados ?? 0 }}</p>
                <p><strong>G:</strong> {{ $equipo->juegos_ganados ?? 0 }}</p>
                <p><strong>E:</strong> {{ $equipo->juegos_empatados ?? 0 }}</p>
                <p><strong>P:</strong> {{ $equipo->juegos_perdidos ?? 0 }}</p>
                <p><strong>GF:</strong> {{ $equipo->goles_favor ?? 0 }}</p>
                <p><strong>GC:</strong> {{ $equipo->goles_contra ?? 0 }}</p>
                <p><strong>DG:</strong> {{ $equipo->diferencia_goles ?? 0 }}</p>
                <p><strong>Puntos:</strong> {{ $equipo->puntos ?? 0 }}</p>
            </div>
        </div>

        <form action="{{ route('equipos.destroy', $equipo) }}" method="POST" onsubmit="return confirm('¿Eliminar este equipo?');" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 border text-[#F53003]">Eliminar</button>
        </form>
    </div>
</body>
</html>
