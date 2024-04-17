<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pagina afegir treballadors
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                        <div class="container-fluid">
                            <a class="navbar-brand h1" href="{{ route('gestioEmpresa') }}">Pagina principal gestioEmpresa</a>
                        </div>
                    </nav>
                    <form action="{{ route('AfegirTreballadors') }}" method="post">
                        <div>
                            @csrf
                            <div>
                                <label for="name">Name: </label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div>
                                <label for="surname">Surname: </label>
                                <input type="text" name="surname" id="surname" required>
                            </div>
                            <div>
                                <label for="email">Email: </label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div>
                                <label for="password">Password: </label>
                                <input type="password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Mínims: 8 caràcters, una majúscula, una minúscula, un número i un caràter especial" name="password" id="password" required>
                            </div>
                            <div>
                                <input type="submit" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>