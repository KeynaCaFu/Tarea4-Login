<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard - Información del Usuario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- User card -->
                <div class="col-span-1">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="flex items-center space-x-4">
                                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center text-2xl text-gray-500">
                                    
                                    {{ strtoupper(substr(($user->nombre ?? Auth::user()->name ?? 'U'), 0, 1)) }}
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">{{ $user->nombre ?? Auth::user()->name ?? 'Usuario' }}</h3>
                                    <p class="text-sm text-gray-500"><p><strong>Correo: </strong>{{ $user->email ?? Auth::user()->email ?? '' }}</p>
                                </div>
                            </div>

                            <div class="mt-6 text-sm text-gray-700 space-y-2">
                                <p><strong>Apodo:</strong> {{ $user->apodo ?? 'No especificado' }}</p>
                                <p><strong>Teléfono:</strong> {{ $user->telefono ?? 'No especificado' }}</p>
                                <p><strong>Dirección:</strong> {{ $user->direccion ?? 'No especificado' }}</p>
                            </div>

                            <div class="mt-6">
                                <a href="{{ route('profile.edit') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Editar perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>