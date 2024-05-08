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
                <h5>data_inici_lloguer: {{ $lloga->data_inici_lloguer }}</h5>
            </div>
            <div>
                <h5>hora_inici_lloguer: {{ $lloga->hora_inici_lloguer }}</h5>
            </div>
            <div>
                <h5>data_final_lloguer: {{ $lloga->data_final_lloguer }}</h5>
            </div>
            <div>
                <h5>hora_final_lloguer: {{ $lloga->hora_final_lloguer }}</h5>
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