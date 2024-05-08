@if (Auth::check() && ((Auth::user()->type == 'treballador') || (Auth::user()->type == 'cap de departament')))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pagina Client
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
                        </div>
                    </nav>
                    <div>
                        <div class="flex justify-center">
                            <div class="flex flex-col justify-between">
                                <div>
                                    <h5>ID: {{ $client->dni }}</h5>
                                </div>
                                <div>
                                    <h5>Nom: {{ $client->nom }}</h5>
                                </div>
                                <div>
                                    <h5>Cognoms: {{ $client->cognom }}</h5>
                                </div>
                                <div>
                                    <h5>Edat: {{ $client->edat }}</h5>
                                </div>
                                <div>
                                    <h5>Adreça: {{ $client->adreça }}</h5>
                                </div>
                                <div>
                                    <h5>Ciutat: {{ $client->ciutat }}</h5>
                                </div>
                                <div>
                                    <h5>Pais: {{ $client->pais }}</h5>
                                </div>
                                <div>
                                    <h5>Email: {{ $client->email }}</h5>
                                </div>
                                <div>
                                    <h5>Tipus de targeta: {{ $client->tipus_targeta }}</h5>
                                </div>
                                <div>
                                    <h5>Numero de targeta: {{ $client->numero_targeta }}</h5>
                                </div>
                                <!-- AÑADIR VARIABLE DE TIPO APARTAMENTO Y DISPLAYEAR -->
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center" style="padding: 10px;">
                        <a href="{{ route('generatePDFC', ['dni' => $client->dni]) }}">Generar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endif