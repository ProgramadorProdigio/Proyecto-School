<h3 class="mb-4">PERIODO</h3>

<div class="row mb-3">
    <div class="col-12 text-end ">
        <button type="button" class="btn" style="background-color: #E74C3C; border-color: #E74C3C; color: white;"
                onclick="location.href='index.php';">
            <i class="fas fa-arrow-circle-left"></i> Regresar
        </button>
        <button type="button" class="btn" style="background-color: #009475; border-color: #009475; color: white;"
                onclick="loadFormPeriodo('none');">
            <i class="fas fa-plus-circle"></i> Nuevo Periodo
        </button>
        <button type="button" class="btn" style="background-color: #003B5C; border-color: #003B5C; color: white;"
                onclick="loadFormPeriodo('mod');">
            <i class="fas fa-edit"></i> Modificar Periodo
        </button>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div id="frmArea"></div>
    </div>
</div>

<table class="table table-hover" id="tablePeriod">
    <thead>
    <tr class="table-dark">
        <th>ID Periodo</th>
        <th>Periodo</th>
        <th>Fecha de inicio</th>
        <th>Fecha de termino</th>
        <th>Fecha de inicio de ajustes</th>
        <th>Fecha de termino de ajustes</th>
        <th>Estado</th>
        <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
    <tr class="table-success">
        <td>P2025-1</td>
        <td>Enero-Junio 2025</td>
        <td>15/01/2025</td>
        <td>30/06/2025</td>
        <td>10/01/2025</td>
        <td>25/01/2025</td>
        <td><span class="badge bg-success">Activo</span></td>
        <td>
            <div class="d-flex gap-2">
                <button class="btn btn-primary btn-sm d-flex align-items-center" onclick="loadFormPeriodo('mod')">
                    <i class="fas fa-edit me-1"></i>
                    <span>Editar</span>
                </button>
                <button class="btn btn-warning btn-sm d-flex align-items-center" onclick="changeStatus('P2025-1')">
                    <i class="fas fa-toggle-on me-1"></i>
                    <span>Estado</span>
                </button>
            </div>
        </td>
    </tr>
    </tbody>
</table>