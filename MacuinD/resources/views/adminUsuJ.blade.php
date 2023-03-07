@extends('plant')
@section('cont')
  <br>
  <div class="text-center"><h4>Consulta de Usuarios</h4></div>
  <br>
  <div class="container">
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
      <a href="" class="btn btn-primary">Editar <i class="bi bi-percil"></i></a>
      <a href="" class="btn btn-danger">Eliminar <i class="bi bi-percil"></i></a>
</td>
    </tr>
  </tbody>

</table>
</div>
@stop 