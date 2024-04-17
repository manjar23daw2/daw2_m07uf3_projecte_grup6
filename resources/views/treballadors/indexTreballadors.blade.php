<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pagina principal gestió treballadors
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--{{ __("You're logged in!") }}-->
                    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                        <div class="container-fluid">
                            <a class="navbar-brand h1" href="{{ route('gestioEmpresa') }}">Pagina principal gestioEmpresa</a>
                            <div class="justify-end">
                                <div class="col">
                                    <a class="btn btn-sm btn-success" href="{{ route('AfegirTreballadorsForm') }}">Afegir Treballadors</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div>
                        @foreach ($users as $user)
                        <div>
                            <div class="flex flex-row justify-between">
                                <div>
                                    <h5>{{ $user->email }}</h5>
                                </div>
                                <div>
                                    <h5>{{ $user->name }}</h5>
                                </div>
                                <div>
                                    <h5>{{ $user->surname }}</h5>
                                </div>
                                <div>
                                    <p>{{ $user->type }}</p>
                                </div>
                                <div>
                                    <form action="{{ route('EliminarTreballadors', ['id' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Esborrar Treballadors</button>
                                    </form>
                                </div>
                                <div>
                                    <a class="btn btn-sm btn-success" href="{{ route('EditarTreballadorsForm', ['id' => $user->id]) }}">Modificar Treballadors</a>
                                </div>
                                <div>
                                    <a class="btn btn-sm btn-success" href="{{ route('VeureTreballador', ['id' => $user->id]) }}">Veure Treballadors</a>
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