@if (Auth::check() && (Auth::user()->type == 'treballador'))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pagina Apartament
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
                                    <h5>{{ $apt->codi_unic }}</h5>
                                </div>
                                <div>
                                    <h5>{{ $apt->referencia_catastral }}</h5>
                                </div>
                                <div>
                                    <h5>{{ $apt->ciutat }}</h5>
                                </div>
                                <div>
                                    <h5>{{ $apt->barri }}</h5>
                                </div>
                                <div>
                                    <p>{{ $apt->nom_carrer }}</p>
                                </div>
                                <div>
                                    <p>{{ $apt->numero_carrer}}</p>
                                </div>
                                <div>
                                    <p>{{ $apt->pis}}</p>
                                </div>
                                <div>
                                    <p>{{ $apt->llits}}</p>
                                </div>
                                <div>
                                    <p>{{ $apt->habitacions}}</p>
                                </div>
                                <div>
                                    <p>{{ $apt->ascensor}}</p>
                                </div>
                                <div>
                                    <p>{{ $apt->calefacció}}</p>
                                </div>
                                <div>
                                    <p>{{ $apt->aire_condicionat}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center" style="padding: 10px;">
                        <a href="{{ route('generatePDFA', ['codi' => $apt->codi_unic]) }}">Generar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endif