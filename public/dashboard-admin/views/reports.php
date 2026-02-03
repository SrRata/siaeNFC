<div class="filters">
    <div class="filters-top">
        <i data-lucide="funnel"></i>
        <p>Filtros de búsqueda</p>
    </div>
    <div class="filters-bottom">
        <div class="filters-input">
            <p>Curso</p>
            <div class="input">
                <i data-lucide="graduation-cap"></i>
                <input type="text">
            </div>
        </div>
        <div class="filters-input">
            <p>Rango de fecha</p>
            <div class="input">
                <i data-lucide="calendar-days"></i>
                <input type="text">
            </div>
        </div>
        <div class="filters-actions">
            <button class="button button-blue">
                <i data-lucide="clipboard-list"></i>    
                Generar reporte
            </button>
            <i data-lucide="rotate-cw" class="filters-reset"></i>
        </div>
    </div>
</div>

<div class="info-target info-target-sm-v2">

    <div class="icon-container icon-circle icon-blue">
        <i data-lucide="percent"></i>
    </div>

    <div class="info-target-sm-v2-right">
        <p class="info-target-sm-text">Asistencia media</p>
        <p class="info-target-value">92.4%</p>
        <p class="info-target-sm-text info-target-sm-text-green">2.1% vs el mes anterior</p>
    </div>

</div>

<div class="info-target info-target-sm-v2">

    <div class="icon-container icon-circle icon-orange">
        <i data-lucide="percent"></i>
    </div>

    <div class="info-target-sm-v2-right">
        <p class="info-target-sm-text">Total de faltas</p>
        <p class="info-target-value">42</p>
        <p class="info-target-text">En el periodo seleccionado</p>
    </div>



</div>

<div class="info-target info-target-sm-v2">

    <div class="icon-container icon-circle icon-red">
        <i data-lucide="alert-triangle"></i>
    </div>

    <div class="info-target-sm-v2-right">
        <p>Estudiantes en alerta</p>
        <p class="info-target-value">5</p>
        <p class="info-target-sm-text info-target-sm-text-red">< 75% de asistencia</p>
    </div>

</div>

<div class="table">
    <div class="table-top">
        <h3 class="table-title">
            <i data-lucide="graduation-cap"></i>
            3ro de bachillerato especialidad informatica
        </h3>
        <button class="button button-green">
            <i data-lucide="sheet"></i>
            Exportar excel
        </button>
    </div>
    <table class="table-body">
        <thead>
            <tr>
                <th class="table-header table-data">Foto</th>
                <th class="table-header table-data">Nombre del Estudiante</th>
                <th class="table-header table-data">Total Asistencias</th>
                <th class="table-header table-data">Total Faltas</th>
                <th class="table-header table-data table-data-fit">% de Asistencia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="table-data"></td>
                <td class="table-data">
                    <div class="table-data-column">
                        <p class="table-data-name">Justin Alvarez</p>
                        <p class="table-data-id">ID: 0150072</p>
                    </div>
                </td>
                <td class="table-data"><div class="badge badge-green">22</div></td>
                <td class="table-data table-data-alert">8</td>
                <td class="table-data table-data-fit">
                    <div class="table-data-column table-data-column-center">
                        <p class="table-data-name">21.6%</p>
                        <div class="bar-sm"><div class="bar-fill bar-alert" style="width: 21.6%;"></div></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-data"></td>
                <td class="table-data">
                    <div class="table-data-column">
                        <p class="table-data-name">Luis Matailo</p>
                        <p class="table-data-id">ID: 2112561</p>
                    </div>
                </td>
                <td class="table-data"><div class="badge badge-green">0</div></td>
                <td class="table-data">0</td>
                <td class="table-data table-data-fit">
                    <div class="table-data-column table-data-column-center">
                        <p class="table-data-name">100%</p>
                        <div class="bar-sm"><div class="bar-fill" style="width: 100%;"></div></div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>