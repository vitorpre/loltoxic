@extends('layouts/master')

@section('content')

	<div class="col-md-6 offset-md-3">


		<div class="text-center">
	    	<h1 class="">lol Toxic</h1>
	    </div>

		@include('partials.success')
		@include('partials.error')
		
	    <form class="form-horizontal" method="post" action="{{ route('publico.jogador') }}">
			{{ csrf_field() }}

	    	<div class="row form-group">
		  		<label class="col-md-12 control-label text-md-center" for="textinput">Buscar jogador</label>  
		  		<div class="col-md-12">
			  		<div class="input-group">
				  		<input type="text" name="username" class="form-control" placeholder="Search for...">
					    <span class="input-group-btn">
					    	<button class="btn btn-secondary" type="submit">Go!</button>
				    	</span>
			    	</div>
			  	</div>
			</div>

			<a class="text-center">
				<a href="{{ route('publico.cadastro.denuncia') }}" ><button class="btn btn-secondary" type="button">Denunciar<br />Jogador</button></a>
			</div>
			


	    </form>

    </div>

@endsection
