<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pagina usuari
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
                        </div>
                    </nav>
                    <div>
                        <div class="flex justify-center">
                            <div class="flex flex-col justify-between">
                                <div>
                                    <h5>ID: {{ $user->id }}</h5>
                                </div>
                                <div>
                                    <h5>Email: {{ $user->email }}</h5>
                                </div>
                                <div>
                                    <h5>Name: {{ $user->name }}</h5>
                                </div>
                                <div>
                                    <h5>Surname: {{ $user->surname }}</h5>
                                </div>
                                <div>
                                    <p>Role: {{ $user->type }}</p>
                                </div>
                                <div>
                                    <p>last login: {{ $user->last_login}}</p>
                                </div>
                                <div>
                                    <p>last logout: {{ $user->last_logout}}</p>
                                </div>
                                <div>
                                    <p>created at: {{ $user->created_at}}</p>
                                </div>
                                <div>
                                    <p>updated at: {{ $user->updated_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center" style="padding: 10px;">
                        <a href="{{ route('generatePDF', ['id' => $user->id]) }}">Generar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>