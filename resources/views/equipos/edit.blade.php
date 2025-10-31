<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar equipo</title>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] p-6">
        <div class="w-full lg:max-w-4xl max-w-[800px] bg-white dark:bg-[#161615] rounded-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <h1 class="text-2xl font-medium">Editar equipo</h1>
                <a href="{{ route('equipos.index') }}" class="px-3 py-1 border rounded-sm">Volver</a>
            </div>

            @if ($errors->any())
                <div class="mb-4 text-sm text-white bg-red-600 px-4 py-2 rounded-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('equipos.update', $equipo) }}" method="POST" class="space-y-3">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm">Nombre</label>
                    <input name="nombre" value="{{ old('nombre', $equipo->nombre) }}" required
                           class="w-full px-3 py-2 border border-[#e3e3e0] rounded-sm">
                </div>

                <div>
                    <label class="block text-sm">Marca</label>
                    <input name="marca" value="{{ old('marca', $equipo->marca) }}"
                           class="w-full px-3 py-2 border border-[#e3e3e0] rounded-sm">
                </div>

                <div>
                    <label class="block text-sm">Modelo</label>
                    <input name="modelo" value="{{ old('modelo', $equipo->modelo) }}"
                           class="w-full px-3 py-2 border border-[#e3e3e0] rounded-sm">
                </div>

                <div>
                    <label class="block text-sm">Estado</label>
                    <select name="estado" class="w-full px-3 py-2 border border-[#e3e3e0] rounded-sm">
                        <option value="disponible" {{ old('estado', $equipo->estado) == 'disponible' ? 'selected' : '' }}>Disponible</option>
                        <option value="no disponible" {{ old('estado', $equipo->estado) == 'no disponible' ? 'selected' : '' }}>No disponible</option>
                    </select>
                </div>

                <div class="flex gap-2">
                    <button type="submit" class="px-4 py-2 bg-[#1b1b18] text-white rounded-sm">Actualizar</button>
                    <a href="{{ route('equipos.index') }}" class="px-4 py-2 border rounded-sm">Cancelar</a>
                </div>
            </form>
        </div>
    </body>
</html>
