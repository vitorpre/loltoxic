@extends('layouts/master')

@section('content')

	<div class="col-md-10 offset-md-1">

		<div class="">
	    	<h1 class="">{{ $jogador->username }}</h1>
	    </div>
		@foreach ($jogador->denuncias as $denuncia)

			<div class="denuncia">
				<h3 class="data-denuncia">
					{{ $denuncia->dataOcorrido->format('d/m/Y') }}
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

		<div class="denuncia">
			<h3 class="data-denuncia">
				27/05/2017
			</h3>
			<div class="imagens-denuncia">
				<div class="row">
					<div class="col-md-3">
						<img class="img-thumbnail" src="http://img.gentside.com.br/league-of-legends/toxic_8523_w460.jpg" />
					</div>
					<div class="col-md-3">
						<img class="img-thumbnail" src="http://img.gentside.com.br/league-of-legends/toxic_8523_w460.jpg" />
					</div>
					<div class="col-md-3">
						<img class="img-thumbnail" src="http://img.gentside.com.br/league-of-legends/toxic_8523_w460.jpg" />
					</div>
					<div class="col-md-3">
						<img class="img-thumbnail" src="http://img.gentside.com.br/league-of-legends/toxic_8523_w460.jpg" />
					</div>
				</div>
			</div>
		</div>
		
    </div>

@endsection
