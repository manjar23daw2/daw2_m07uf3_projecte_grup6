@if (Auth::check() && (Auth::user()->type == 'cap de departament')) 
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
                            <div style="padding-bottom:15px;display:flex;justify-content:center; font-size:25px">
                                <div>
                                    <a class="navbar-brand h1" href="{{ route('gestioEmpresa') }}">Pagina principal gestioEmpresa</a>
                                </div>
                            </div>
                            <div style="padding-bottom:15px;">
                                <div class="col" style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#00FE19;">
                                    <a class="btn btn-sm btn-success" style="padding-top: 5px;color:#000000" href="{{ route('AfegirTreballadorsForm') }}">Afegir Treballadors</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div>
                        @foreach ($users as $user)
                        <div>
                            <div class="flex flex-row justify-between">
                                <div style="padding-top: 5px;">
                                    <h5>{{ $user->email }}</h5>
                                </div>
                                <div style="padding-top: 5px;">
                                    <h5>{{ $user->name }}</h5>
                                </div>
                                <div style="padding-top: 5px;">
                                    <h5>{{ $user->surname }}</h5>
                                </div>
                                <div style="padding-top: 5px;">
                                    <p>{{ $user->type }}</p>
                                </div>
                                <div style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#FF0000;">
                                    <form action="{{ route('EliminarTreballadors', ['id' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="padding-top: 5px;color:#000000">Esborrar Treballadors</button>
                                    </form>
                                </div>
                                <div style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#EBFF00;">
                                    <a style="padding-top: 5px;color:#000000" href="{{ route('EditarTreballadorsForm', ['id' => $user->id]) }}">Modificar Treballadors</a>
                                </div>
                                <div style="height: 38px; width: 202px; display:flex; justify-content:center; border-radius:30px;background-color:#0066FF;">
                                    <a style="padding-top: 5px;color:#000000" href="{{ route('VeureTreballador', ['id' => $user->id]) }}">Veure Treballadors</a>
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