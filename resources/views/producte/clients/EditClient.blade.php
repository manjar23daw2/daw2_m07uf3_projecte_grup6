<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Clients
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
                                    <a class="navbar-brand h1" href="{{ route('gestioProducte') }}">Pagina principal gestioEmpresa</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <form action="{{ route('EditarClients', $client->dni) }}" method="post">
                        <div>
                            @csrf
                            @method('POST')
                            <div>
                                <label for="dni">Dni: </label>
                                <input style="border-radius:30px;color:black" type="text" name="dni" id="dni" pattern="\d{8}[A-Z]" value="{{$client->dni}}" required disabled>
                            </div>
                            <br>
                            <div>
                                <label for="nom">Nom: </label>
                                <input style="border-radius:30px;color:black" type="text" name="nom" id="nom" required>
                            </div>
                            <br>
                            <div>
                                <label for="cognom">Cognom: </label>
                                <input style="border-radius:30px;color:black" name="cognom" id="cognom" required>
                            </div>
                            <br>
                            <div>
                                <label for="edat">Edat: </label>
                                <input style="border-radius:30px;color:black" type="number" name="edat" id="edat" required>
                            </div>
                            <br>
                            <div>
                                <label for="adreça">Adreça: </label>
                                <input style="border-radius:30px;color:black" name="adreça" id="adreça" required>
                            </div>
                            <br>
                            <div>
                                <label for="ciutat">Ciutat: </label>
                                <input style="border-radius:30px;color:black" name="ciutat" id="ciutat" required>
                            </div>
                            <br>
                            <div>
                                <label for="pais">Pais: </label>
                                <input style="border-radius:30px;color:black" name="pais" id="pais" required>
                            </div>
                            <br>
                            <div>
                                <label for="email">Email: </label>
                                <input style="border-radius:30px;color:black" name="email" id="email" pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" required>
                            </div>
                            <br>
                            <div>
                                <label for="tipus_targeta">Tipus de targeta: </label>
                                <select style="border-radius:30px;color:black" name="tipus_targeta" id="tipus_targeta" required>
                                    <option value="credit">Crèdit</option>
                                    <option value="debit">Dèbit</option>
                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="numero_targeta">Numero targeta: </label>
                                <input style="border-radius:30px;color:black" type="number" name="numero_targeta" id="numero_targeta" pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/" required>
                            </div>
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