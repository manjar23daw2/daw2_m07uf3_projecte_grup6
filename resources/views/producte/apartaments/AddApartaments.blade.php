<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Afegir Apartaments
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
                                    <div style="padding-bottom:15px;display:flex;justify-content:center; font-size:25px">
                                        <div>
                                            <a class="navbar-brand h1" href="{{ route('gestioEmpresa') }}">Pagina principal gestioEmpresa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <form action="{{ route('AfegirApartaments') }}" method="post">
                        <div>
                            @csrf
                            <div>
                                <label for="codi_unic">Codi Unic: </label>
                                <input style="border-radius:30px;color:black" type="text" name="codi_unic" id="codi_unic" pattern="\d{4}[A-Za-z]{3}" required>
                            </div>
                            <br>
                            <div>
                                <label for="referencia_catastral">Referencia Catastral: </label>
                                <input style="border-radius:30px;color:black" type="text" name="referencia_catastral" id="referencia_catastral" required>
                            </div>
                            <br>
                            <div>
                                <label for="ciutat">Ciutat: </label>
                                <input style="border-radius:30px;color:black" name="ciutat" id="ciutat" required>
                            </div>
                            <br>
                            <div>
                                <label for="barri">Barri: </label>
                                <input style="border-radius:30px;color:black" name="barri" id="barri" required>
                            </div>
                            <br>
                            <div>
                                <label for="nom_carrer">Nom Carrer: </label>
                                <input style="border-radius:30px;color:black" name="nom_carrer" id="nom_carrer" required>
                            </div>
                            <br>
                            <div>
                                <label for="numero_carrer">Numero Carrer: </label>
                                <input style="border-radius:30px;color:black" type="number" name="numero_carrer" id="numero_carrer" required>
                            </div>
                            <br>
                            <div>
                                <label for="pis">Pis:  </label>
                                <input style="border-radius:30px;color:black" name="pis" id="pis" required>
                            </div>
                            <br>
                            <div>
                                <label for="llits">Llits:  </label>
                                <input style="border-radius:30px;color:black" type="number" name="llits" id="llits" required>
                            </div>
                            <br>
                            <div>
                                <label for="habitacions">Habitacions:  </label>
                                <input style="border-radius:30px;color:black" type="number" name="habitacions" id="habitacions" required>
                            </div>
                            <br>
                            <div>
                                <label for="ascensor">Ascensor:  </label>
                                <input style="border-radius:30px;color:black" type="checkbox" name="ascensor" id="ascensor" required>
                            </div>
                            <br>
                            <div>
                                <label for="calefacció">Calefacció:  </label>
                                <select  style="border-radius:30px;color:black" name="calefacció" id="calefacció" required> 
                                    <option value="electric">Electrica</option>
                                    <option value="gasNatural">Gas Natural</option>
                                    <option value="buta">Butà</option>
                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="aire_condicionat"> Aire Condicionat:  </label>
                                <input style="border-radius:30px;color:black" type="checkbox" name="aire_condicionat" id="aire_condicionat" required>
                            </div>
                            <br>
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