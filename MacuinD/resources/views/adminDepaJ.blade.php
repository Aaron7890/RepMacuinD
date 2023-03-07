@extends('plant')
@section('cont')
  <br>
  <div class="text-center"><h4>Consulta de Departamentos</h4></div>
  <br>
  <div class="container">
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
      <a href="" class="btn btn-primary">Editar <i class="bi bi-percil"></i></a>
      <a href="" class="btn btn-danger" onclick="confirm()">Eliminar <i class="bi bi-percil"></i></a>
</td>
    </tr>
  </tbody>

</table>
</div>
@stop 