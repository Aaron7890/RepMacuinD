@extends('plantAE')
@section('contentido')
<h1 class="mt-4 display-1 text-center"></h1>
<style>
    div.formxd{
        border-color: black;
        border-style: solid;
        border-radius: 5px;
        margin-top: 10px;
        position: relative;
        width: 30%;
        background-color: rgb(129, 128, 128);
    }

/* EDITAR */

</style>

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <symbol id="prov" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        </symbol>
    </svg>

    <div class="container formxd">
        <div class="text-center mt-2 mb-3">
            <h2 class="fw-normal text-light">Actualizar Usuarios</h2>
        </div>
        <div class="text-center m-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
              </svg>
        </div>

        <form method="get" action="{{ route('usuariosJ') }}">
            <div class="row g-3 align-items-center">
                <div class="form-group">
                    <label class="form-label text-light" >Nombre(s): </label>
                    <input type="text" class="form-control" name="Nom" placeholder="Se solicita Nombre" value="" required>
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light" >Apellido Paterno: </label>
                    <input type="text" class="form-control" name="ApP" placeholder="Se solicita Apellido Paterno" value="" required>
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light" >Apellido Materno: </label>
                    <input type="text" class="form-control" name="ApM" placeholder="Se solicita Apellido Materno" value="" required>
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light" >Matricula: </label>
                    <input type="number" class="form-control" name="Mat" placeholder="Se solicita Matricula" value="" required>
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light">Puesto: </label>
                    <input type="text" class="form-control" name="Puesto" placeholder="Se solicita Puesto" value="" required>
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light">Correo: </label>
                    <input type="text" class="form-control" name="Correo" placeholder="Se solicita Correp" value="" required>
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light">Teléfono: </label>
                    <input type="number" class="form-control" name="Tel" placeholder="Se solicita Teléfono" value="" required>
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light">Contraseña: </label>
                    <input type="text" class="form-control" name="Contraseña" placeholder="Se solicita Contraseña" value="" required>
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="text-center">
                    <button type="submit" name="retU" class="btn btn-secondary m-4  mt-1" href="/inicio/usuariosJ" onclick="Retorn()">Regresar</button>
                    <button type="submit" name="agU" class="btn btn-dark m-4 mt-1" href="/inicio/usuariosJ" onclick="Agregado()">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
 @stop 