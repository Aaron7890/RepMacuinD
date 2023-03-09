@extends('plant')
@section('cont')
  <br>
  <div class="text-center"><h4>Consulta de Usuarios</h4></div>
  <br>
  <div class="container-xl">
    <div class="abs-center">
      <div class="table-responsive">
          <div class="table-wrapper">
            <div class="table-title">
              <div class="row">
                  {{-- <div class="col-sm-8" style="color: #000066;"><h2>Departamentos</h2></div> --}}
                  <div class="col-sm-4">  
                    <a href="/inicio">
                      <input class="btn btn-warning" type="submit" value="Salir" onclick="ConfirmExit()">
                  </a>
                      <div class="search-box">
                      {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg> --}}
                          <input type="text" class="form-control" placeholder="Search&hellip;">
                      </div>
                      <a href="/inicio/depaJ/addeditDepa">
                        <input class="btn btn-primary" type="submit" value="Agregar" onclick="Redirect()">
                      </a>
                  </div>
              </div>
            </div>
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
</div>
</div>
</div>
@stop 