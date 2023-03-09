@extends('plant')
@section('cont')
  <br>
  <div class="text-center"><h4>Consulta de Usuarios</h4></div>
  <br>
  <div class="container"> /* EDITAR */
    <a href="/inicio">
      <input class="btn btn-warning" type="submit" value="Salir" onclick="ConfirmExit()">
   </a>
   <a href="/inicio/usuariosJ/addeditUsu">
    <input class="btn btn-primary" type="submit" value="Agregar" onclick="Redirect()">
  </a>
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Departamento</th>
      <th scope="col">Correo</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th>1</th>
      <td>Oscar Eduardo</td>
      <td>Rivera</td>
      <td>Flores</td>
      <td>Sistemas</td>
      <td>120036686@upq.edu.mx</td>
      <td>442 206 0131</td>
<td>
      <a class="btn btn-primary" onclick="Redirect()" href="/inicio/usuariosJ/addeditUsu">Editar <i class="bi bi-percil"></i></a>
      <a class="btn btn-danger" onclick="ConElim()">Eliminar <i class="bi bi-percil"></i></a>
</td>
    </tr>
  </tbody>

</table>
</div>
@stop 