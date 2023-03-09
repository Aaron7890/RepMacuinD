@extends('plant')
@section('cont')
  <br>
  <div class="text-center"><h4>Consulta de Tickets</h4></div>
  <br>
  <button type="button" class="btn btn-warning" onclick="ConfirmExit()" href="/">Salir</button>
  <button type="button" class="btn btn-primary" onclick="Redirect()" href="/inicio/depaJ/addeditTic">Agregar</button>
  <div class="container"> /* EDITAR */
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">IdTicket</th>
      <th scope="col">IdUsuario</th>
      <th scope="col">Estatus</th>
      <th scope="col">Atendiendo</th>
      <th scope="col">Comentarios</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th>1</th>
      <td>1</td>
      <td>Pendiente</td>
      <td>Oscar</td>
      <td>Problemas con algo...</td>
<td>
      <a href="" class="btn btn-primary" onclick="Redirect()" href="/inicio/depaJ/addeditTic">Editar <i class="bi bi-percil"></i></a>
      <a href="" class="btn btn-danger" onclick="ConElim()">Eliminar <i class="bi bi-percil"></i></a>
</td>
    </tr>
  </tbody>

</table>
</div>
@stop 