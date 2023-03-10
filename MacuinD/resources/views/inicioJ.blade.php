@extends('plant')
@section('cont')  
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
            <h2 class="fw-normal text-light">Jefe Soporte</h2>
        </div>
        <div class="text-center m-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
              </svg>
        </div>

        <form method="get" action="{{ route('addeditUsu') }}">
        <div class="form-group">
            <label class="form-label text-light" >Nombre(s) </label>
            <p class="fv-bold text-danger"></p>
        </div>
        <div class="form-group">
            <label class="form-label text-light" >Apellido Paterno</label>
            <p class="fv-bold text-danger"></p>
        </div>
        <div class="form-group">
            <label class="form-label text-light" >Apellido Materno</label>
            <p class="fv-bold text-danger"></p>
        </div>
        <div class="form-group">
            <label class="form-label text-light" >Matricula</label>
            <p class="fv-bold text-danger"></p>
        </div>
        <div class="form-group">
            <label class="form-label text-light">Puesto</label>
            <p class="fv-bold text-danger"></p>
        </div>
        <div class="form-group">
            <label class="form-label text-light">Correo</label>
            <p class="fv-bold text-danger"></p>
        </div>
        <div class="form-group">
            <label class="form-label text-light">Tel??fono</label>
            <p class="fv-bold text-danger"></p>
        </div>
        <div class="form-group">
            <label class="form-label text-light">Contrase??a</label>
            <p class="fv-bold text-danger"></p>
        </div>
                <div class="text-center">
                    <button type="submit" name="agD" class="btn btn-dark m-4" href="/inicio/usuariosJ/addeditUsu" onclick="Retorn()">Actualizar Datos</button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
 @stop