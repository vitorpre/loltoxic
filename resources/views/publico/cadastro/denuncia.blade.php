@extends('layouts/master')

@section('content')

    <div class="col-md-10 offset-md-1">

        <form class="form-horizontal" method="post" action="{{ route('cadastro.executa.denuncia') }}">
            {{ csrf_field() }}

            <h2 class="text-md-center">Denuncia</h2>

            <fieldset>
                <!-- Form Name -->
                <legend></legend>

                <!-- Text input-->

                <div class="form-group row">
                    <label class="col-md-3 form-control-label text-right" for="jogador">Jogador</label>
                    <div class="col-md-4">
                        <input id="jogador" name="jogador" type="text" placeholder="username do jogador" class="form-control">
                        <span class="form-text"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label text-right" for="comentario">Comentário</label>
                    <div class="col-md-4">
                        <textarea class="form-control" name="comentario" id="comentario"></textarea>
                        <span class="form-text"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label text-right" for="dataOcorrido">Data do ocorrido</label>
                    <div class="col-md-4">
                        <input id="dataOcorrido" name="dataOcorrido" type="date" class="form-control">
                        <span class="form-text"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label text-right" for="emailRetorno">Email para retorno</label>
                    <div class="col-md-4">
                        <input id="emailRetorno" name="emailRetorno" type="text" class="form-control">
                        <span class="form-text"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label text-right" for="imagemPrincipal">Imagens</label>
                    <div class="col-md-4">
                        <input id="imagemPrincipal" name="imagemPrincipal" type="file" class="form-control">
                        <span class="form-text"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <input type="submit" value="enviar" />
                </div>



            </fieldset>
        </form>



    </div>

@endsection
