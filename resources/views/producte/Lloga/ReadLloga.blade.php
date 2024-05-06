@if (Auth::check() && (Auth::user()->type == 'treballador'))
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pagina lloga
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
                                    <h5>Dni: {{ $lloga->dni }}</h5>
                                </div>
                                <div>
                                    <h5>Codi: {{ $lloga->codi_unic }}</h5>
                                </div>
                                <div>
                                    <h5>{{ $lloga->data_inici_lloguer }}</h5>
                                </div>
                                <div>
                                    <h5>{{ $lloga->hora_inici_lloguer }}</h5>
                                </div>
                                <div>
                                    <h5>{{ $lloga->data_final_lloguer }}</h5>
                                </div>
                                <div>
                                    <h5>{{ $lloga->hora_final_lloguer }}</h5>
                                </div>
                                <div>
                                    <h5>Lloc de lliurament de les claus: {{ $lloga->lloc_lliurament_claus }}</h5>
                                </div>
                                <div>
                                    <h5>Devolució: {{ $lloga->lloc_devolució_claus }}</h5>
                                </div>
                                <div>
                                    <h5>Preu al dia: {{ $lloga->preu_dia }}</h5>
                                </div>
                                <div>
                                    <h5>Dipósit: {{ $lloga->diposit }}</h5>
                                </div>
                                <div>
                                    <h5>Quantitat: {{ $lloga->quantitat_diposit }}</h5>
                                </div>
                                <div>
                                    <h5>assegurança: {{ $lloga->tipus_assegurança }}</h5>
                                </div>

                                <!-- AÑADIR VARIABLE DE TIPO APARTAMENTO Y DISPLAYEAR -->
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center" style="padding: 10px;">
                        <a href="{{ route('generatePDFLL', ['codi' => $lloga->codi_unic, 'dni' => $lloga->dni]) }}">Generar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endif