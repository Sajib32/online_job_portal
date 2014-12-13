<h1>Created.</h1>

@if (Session::has('message'))
                    <p class="alert"> {{ Session::get('message') }} </p>
               @endif
@if($errors->has())
		<div id="form-errors">
			<p>The following errors have occurred:</p>

			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><!-- end form-errors -->
		@endif