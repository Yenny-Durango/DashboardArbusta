<form action="">
    <h1 class="text-center font-weight-light my-4">Crear ticket</h1>

    <h5 class="text-left font-weight-light my-4">Resumen del problema</h5>
    <input type="text" name="resumen_problema" placeholder="Resumen del problema" class="form-control">

    <h5 class="text-left font-weight-light my-4">Imagen</h5>
    <input type="file" name="imagenes" placeholder="Imagen" id="imagenInput" onchange="mostrarImagen(event)" accept="image/*" class="btn_imagenes form-control">

    <input type="hidden" id="inputImagenes" name="inputImagenes">
    <div id="imagenesPrevias"></div>

    <h5 class="text-left font-weight-light my-4">Detalle del problema</h5>
    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>

    <h5 class="text-left font-weight-light my-4">Correo</h5>
    <input type="email" name="correo" placeholder="Correo" onclick="ValidarCorreo()" class="form-control">

    <h5 class="text-left font-weight-light my-4">Telefono</h5>
    <input type="number" name="telefono" placeholder="Telefono" class="form-control">

    <h5 class="text-left font-weight-light my-4">Nombre</h5>
    <input type="text" name="nombre" placeholder="Nombre" class="form-control">

    <h5 class="text-left font-weight-light my-4">Apellido</h5>
    <input type="text" name="apellido" placeholder="Apellido" class="form-control">
    <br>
    <a href=""><button type="submit" value="guardar" class="btn btn-primary btn-guardar">Guardar</button></a>
</form>