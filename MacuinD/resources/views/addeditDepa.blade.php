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
            <h2 class="fw-normal text-light">Actualizar Departamentos</h2>
        </div>
        <div class="text-center m-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
              </svg>
        </div>

        <form method="get" action="{{ route('depaJ') }}">
            <div class="row g-3 align-items-center">
                <div class="form-group">
                    <label class="form-label text-light" >Departamento: </label>
                    <input type="text" class="form-control" name="Depart" placeholder="Se solicita Nombre del Departamento" value="">
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light">Jefe: </label>
                    <input type="text" class="form-control" name="JefeD" placeholder="Se solicita Jefe del Departamento" value="">
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light">Integrantes: </label>
                    <input type="text" class="form-control" name="IntDep" placeholder="Se solicita Total de Integrantes" value="">
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="text-center">
                    <button type="submit" name="retD" class="btn btn-secondary m-4" href="/inicio/depaJ" onclick="Retorn()">Regresar</button>
                    <button type="submit" name="agD" class="btn btn-dark m-4" href="/inicio/depaJ" onclick="Agregado()">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
 @stop