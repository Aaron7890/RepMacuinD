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
            <h2 class="fw-normal text-light">Editar Tickets</h2>
        </div>
        <div class="text-center m-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-earmark-break-fill" viewBox="0 0 16 16">
                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V9H2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM2 12h12v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z"/>
              </svg>
        </div>

        <form method="get" action="{{ route('ticketsJ') }}">
            <div class="row g-3 align-items-center">
                <div class="form-group">
                    <label class="form-label text-light" >Estatus: </label>
                    <input type="text" class="form-control" name="Status" placeholder="Estado de la Solicitud" value="">
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light">Encargado: </label>
                    <input type="text" class="form-control" name="Aux" placeholder="Quien se esta encargando" value="">
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light">Comentarios: </label>
                    <input type="text" class="form-control" name="Coment" value="">
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="text-center">
                    <button type="button" name="retT" class="btn btn-secondary m-4" href="/inicio/ticketsJ" onclick="Retorn()">Regresar</button>
                    <button type="button" name="agT" class="btn btn-dark m-4" href="/inicio/ticketsJ" onclick="Agregado()">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
 @stop 