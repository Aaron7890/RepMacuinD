@extends('plantLogin')
@section('content')  
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


</style>

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <symbol id="prov" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        </symbol>
    </svg>

    <div class="container formxd">
        <div class="text-center mt-2">
            <h1>M</h1>
            <h2 class="fw-normal text-light">MACUIN DASHBOARDS</h2>
        </div>
        <div class="text-center m-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
              </svg>
        </div>

        <form method="get" action="{{ route('inicio') }}">
            <div class="row g-3 align-items-center">
                <div class="form-group">
                    <label class="form-label text-light" >Usuario: </label>
                    <input type="text" class="form-control" name="Correo" placeholder="Se solicita Matricula" value="">
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="form-group">
                    <label class="form-label text-light">Contraseña: </label>
                    <input type="password" class="form-control" name="Contraseña" placeholder="Se solicita Contraseña" value="">
                    <p class="fv-bold text-danger"></p>
                </div>
                <div class="text-center">
                    <button type="submit" name="btnaddU" class="btn btn-dark m-3">Ingresar</button>
                </div>
            </div>
        </form>
    </div>
 @stop 