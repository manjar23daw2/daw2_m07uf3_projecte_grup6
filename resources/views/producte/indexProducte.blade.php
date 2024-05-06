@if (Auth::check() && (Auth::user()->type == 'treballador')) 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pagina principal gestió clients
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--{{ __("You're logged in!") }}-->
                    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                        <div class="container-fluid">
                            <div style="padding-bottom:15px;display:flex;justify-content:center; font-size:25px">
                                <div>
                                    <a class="navbar-brand h1" href="{{ route('gestioProducte') }}">Pagina principal gestioProducte</a>
                                </div>
                            </div>
                            <div style="padding-bottom:15px;">
                                <div class="col" style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#00FE19;">
                                    <a class="btn btn-sm btn-success" style="padding-top: 5px;color:#000000" href="{{ route('AfegirClientsForm') }}">Afegir Clients</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    {{--<div>
                        @foreach ($clients as $client)
                        <div>
                            <div class="flex flex-row justify-between">
                                <div style="padding-top: 5px;">
                                    <h5>{{ $client->dni }}</h5>
                                </div>
                                <div style="padding-top: 5px;">
                                    <h5>{{ $client->name }}</h5>
                                </div>
                                <div style="padding-top: 5px;">
                                    <h5>{{ $client->surname }}</h5>
                                </div>
                                <div style="padding-top: 5px;">
                                    <p>{{ $client->email }}</p>
                                </div>
                                <div style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#FF0000;">
                                    <form action="{{ route('EliminarTreballadors', ['id' => $client->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="padding-top: 5px;color:#000000">Esborrar Clients</button>
                                    </form>
                                </div>
                                <div style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#EBFF00;">
                                    <a style="padding-top: 5px;color:#000000" href="{{ route('EditarTreballadorsForm', ['id' => $client->dni]) }}">Modificar Clients</a>
                                </div>
                                <div style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#0066FF;">
                                    <a style="padding-top: 5px;color:#000000" href="{{ route('VeureTreballador', ['id' => $client->dni]) }}">Veure Clients</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>--}}
                    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                        <div class="container-fluid">
                            <div style="padding-bottom:15px;">
                                <div class="col" style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#00FE19;">
                                    <a class="btn btn-sm btn-success" style="padding-top: 5px;color:#000000" href="{{ route('AfegirApartamentsForm') }}">Afegir Apartament</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div>
                        @foreach ($apt as $a)
                        <div>
                            <div class="flex flex-row justify-between">
                                <div style="padding-top: 5px;">
                                    <h5>{{ $a->codi_unic }}</h5>
                                </div>
                                <div style="padding-top: 5px;">
                                    <h5>{{ $a->referencia_catastral }}</h5>
                                </div>
                                <div style="padding-top: 5px;">
                                    <h5>{{ $a->ciutat }}</h5>
                                </div>
                                <div style="padding-top: 5px;">
                                    <p>{{ $a->barri }}</p>
                                </div>
                                <div style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#FF0000;">
                                    <form action="{{ route('EliminarApartaments', ['id' => $a->codi_unic]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="padding-top: 5px;color:#000000">Esborrar Apartament</button>
                                    </form>
                                </div>
                                <div style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#EBFF00;">
                                    <a style="padding-top: 5px;color:#000000" href="{{ route('EditarApartamentsForm', ['id' => $a->codi_unic]) }}">Modificar Apartament</a>
                                </div>
                                <div style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#0066FF;">
                                    <a style="padding-top: 5px;color:#000000" href="{{ route('VeureApartaments', ['id' => $a->codi_unic]) }}">Veure Apartament</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endif