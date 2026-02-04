
<div class="filters">

    <div class="filters-bottom">
        <div class="input-item">
            <div class="input">
                <input type="text" placeholder="Buscar estudiante por nombre o ID...">
            </div>
        </div>
        <div class="input-item" style="max-width: 300px;">
            <div class="input">
                <input type="text">
            </div>
        </div>
        <div class="filters-actions">
            <button class="button button-blue">
                <i data-lucide="search"></i>    
                Buscar
            </button>
            <i data-lucide="rotate-cw" class="filters-reset"></i>
        </div>
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