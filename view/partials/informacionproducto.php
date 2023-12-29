<form action="">
    <!-- Título principal -->
    <h1 class="text-center font-weight-light my-4">Información del producto</h1>

    <!-- Campo de selección de proveedor -->
    <h5 class="text-left font-weight-light my-4">Proveedor</h5>
    <select name="proveedor" id="proveedor" class="form-control">
        <option value="Proveedor 1">Proveedor 1</option>
        <option value="Proveedor 2">Proveedor 2</option>
        <option value="Proveedor 3">Proveedor 3</option>
    </select>

    <!-- Campo de referencia del proveedor -->
    <h5 class="text-left font-weight-light my-4">Referencia de proveedor</h5>
    <input class="form-control" type="text" value="N-056">

    <!-- Campo de modelo -->
    <h5 class="text-left font-weight-light my-4">Modelo</h5>
    <input class="form-control" type="text" value="N-056">

    <!-- Campo de número de serie -->
    <h5 class="text-left font-weight-light my-4">Número de serie</h5>
    <input class="form-control" type="text" value="N-056">

    <!-- Campo de fecha efectiva -->
    <h5 class="text-left font-weight-light my-4">Fecha efectiva</h5>
    <input class="form-control" type="date">

    <!-- Línea divisoria -->
    <hr>

    <!-- Opciones de estado del producto (checkboxes) -->
    <div class="form-check mb-3">
        <input class="form-check-input" id="inputAlquilado" type="checkbox" value="">
        <label class="form-check-label" for="inputAlquilado">Alquilado</label>
    </div>

    <div class="form-check mb-3">
        <input class="form-check-input" id="inputSeguro" type="checkbox" value="">
        <label class="form-check-label" for="inputSeguro">Seguro</label>
    </div>

    <div class="form-check mb-3">
        <input class="form-check-input" id="inputLeasing" type="checkbox" value="">
        <label class="form-check-label" for="inputLeasing">Leasing</label>
    </div>
</form>