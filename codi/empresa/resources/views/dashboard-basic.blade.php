<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard dels usuaris tipus bàsic') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ url('clients') }}">Clients: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('clients/create') }}">Clients: Crea un nou client</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('apartaments') }}">Apartaments: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('apartaments/create') }}">Apartaments: Crea un nou apartament</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('lloga') }}">Lloga: Visualitza, actualitza i esborra registres</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('lloga/create') }}">Lloga: Crea un nou llogament</a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
    </div>
</x-app-layout>