@extends('plant')
@section('cont')
  <br>
  <div class="text-center"><h4>Consulta de Departamentos</h4></div>
  <br>
  <button type="button" class="btn btn-warning" onclick="ConfirmExit()" href="/">Salir</button>
  <button type="button" class="btn btn-primary" onclick="Redirect()" href="/inicio/depaJ/addeditDepa">Agregar</button>
  <div class="container"> /* EDITAR */
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
      <a href="" class="btn btn-primary" onclick="Redirect()" href="/inicio/depaJ/addeditDepa">Editar <i class="bi bi-percil"></i></a>
      <a href="" class="btn btn-danger" onclick="ConElim()">Eliminar <i class="bi bi-percil"></i></a>
</td>
    </tr>
  </tbody>

</table>
</div>
@stop 