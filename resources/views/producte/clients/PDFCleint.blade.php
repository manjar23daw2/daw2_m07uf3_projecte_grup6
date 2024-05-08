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