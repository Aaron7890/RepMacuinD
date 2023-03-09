@extends('plant')
@section('cont')
  <br>
  <div class="text-center"><h4>Consulta de Departamentos</h4></div>
  <br>
  <div class="container"> /* EDITAR */
    <a href="/inicio">
      <input class="btn btn-warning" type="submit" value="Salir" onclick="ConfirmExit()">
   </a>
   <a href="/inicio/depaJ/addeditDepa">
    <input class="btn btn-primary" type="submit" value="Agregar" onclick="Redirect()">
  </a>
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Departamento</th>
      <th scope="col">Jefe Departamento</th>
      <th scope="col">Total de Integrantes</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th>1</th>
      <td>Sistemas</td>
      <td>Oscar</td>
      <td>6</td>
<td>
      <a class="btn btn-primary" onclick="Redirect()" href="/inicio/depaJ/addeditDepa">Editar <i class="bi bi-percil"></i></a>
      <a class="btn btn-danger" onclick="ConElim()">Eliminar <i class="bi bi-percil"></i></a>
</td>
    </tr>
  </tbody>

</table>
</div>
@stop 