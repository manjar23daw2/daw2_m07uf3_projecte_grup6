<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Lloguers
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                        <div class="container-fluid">
                            <div style="padding-bottom:15px;display:flex;justify-content:center; font-size:25px">
                                <div>
                                    <a class="navbar-brand h1" href="{{ route('gestioEmpresa') }}">Pagina principal gestioEmpresa</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <form action="{{ route('EditarLloguers', $user->id) }}" method="post">
                        <div>
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="dni">Dni: </label>
                                <input style="border-radius:30px;color:black" type="text" name="dni" id="dni" pattern="/^\d{8}[a-zA-Z]$" required>
                            </div>
                            <br>
                            <div>
                                <label for="codi_unic">Codi Unic: </label>
                                <input style="border-radius:30px;color:black" type="text" name="codi_unic" id="codi_unic" pattern="\d{4}[A-Za-z]{3}" required>
                            </div>
                            <br>
                            <div>
                                <label for="data_inici_lloguer">Data inici lloguer: </label>
                                <input style="border-radius:30px;color:black" type="date" name="data_inici_lloguer" id="data_inici_lloguer" required>
                            </div>
                            <br>
                            <div>
                                <label for="hora_inici_lloguer">Hora inici lloguer: </label>
                                <input style="border-radius:30px;color:black" type="time" name="hora_inici_lloguer" id="hora_inici_lloguer" required>
                            </div>
                            <br>
                            <div>
                                <label for="data_final_lloguer">Data ifinal lloguer: </label>
                                <input style="border-radius:30px;color:black" type="date" name="data_final_lloguer" id="data_final_lloguer" required>
                            </div>
                            <br>
                            <div>
                                <label for="hora_final_lloguer">Hora final lloguer: </label>
                                <input style="border-radius:30px;color:black" type="time" name="hora_final_lloguer" id="hora_final_lloguer" required>
                            </div>
                            <div>
                                <label for="lloc_lliurament_claus">Lloc lliurament claus: </label>
                                <input style="border-radius:30px;color:black" name="lloc_lliurament_claus" id="lloc_lliurament_claus" required>
                            </div>
                            <br>
                            <div>
                                <label for="lloc_devolució_claus">Lloc devolució claus: </label>
                                <input style="border-radius:30px;color:black" name="lloc_devolució_claus" id="lloc_devolució_claus" required>
                            </div>
                            <br>
                            <div>
                                <label for="tipus_assegurança">Tipus de assegurança: </label>
                                <select style="border-radius:30px;color:black" type="number" name="tipus_assegurança" id="tipus_assegurança" required>
                                    <option value="1000">Franquícia fins a 1000 Euros/</option>
                                    <option value="500">Franquícia fins a 500 Euros/</option>
                                    <option value="0">Sense franquícia</option>
                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="preu_dia">Preu al dia: </label>
                                <input style="border-radius:30px;color:black" type="number" name="preu_dia" id="preu_dia" required>
                            </div>
                            <br>
                            <div>
                                <label for="diposit">Diposit: </label>
                                <input style="border-radius:30px;color:black" type="number" name="diposit" id="diposit" required>
                            </div>
                            </br>
                            <div>
                                <label for="quantitat_diposit">Quantitat Diposit: </label>
                                <input style="border-radius:30px;color:black" type="number" name="quantitat_diposit" id="quantitat_diposit" required>
                            </div>
                            </br>
                            <div class="flex justify-center">
                                <input type="submit" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>