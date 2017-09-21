@extends('layouts/master')

@section('content')

	<div class="col-md-10 offset-md-1">

		<div class="">
	    	<h1 class="">Denuncias para aprovação</h1>
	    </div>
		@foreach ($denuncias as $denuncia)

			<div class="denuncia">
				<h3 class="data-denuncia">
					{{ $denuncia->dataOcorrido->format('d/m/Y') }}
					<div>
					    <button class="btn btn-success btnAprovacao" data-id-denuncia="{{ $denuncia->idDenuncia }}" data-eh-aprovar="2">Aprovar</button>
					    <button class="btn btn-danger btnAprovacao" data-id-denuncia="{{ $denuncia->idDenuncia }}" data-eh-aprovar="3">Reprovar</button>
					</div>
				</h3>

				<p>{{ $denuncia->comentario }}</p>

				<div class="imagens-denuncia">
					<div class="row">
						<div class="col-md-3">
							<img class="img-thumbnail" src="http://img.gentside.com.br/league-of-legends/toxic_8523_w460.jpg" />
						</div>
						<div class="col-md-3">
							<img class="img-thumbnail" src="http://img.gentside.com.br/league-of-legends/toxic_8523_w460.jpg" />
						</div>
					</div>
				</div>
			</div>

		@endforeach
		
    </div>

    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="{{asset('js/aprovacao/aprovacao_denuncia.js')}}"></script>


@endsection
