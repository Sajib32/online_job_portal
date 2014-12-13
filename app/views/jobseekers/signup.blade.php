@extends('layouts.main')
@section('content')
<h1>Sign Up page</h1>

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

{{ Form::open(array('url'=>'jobseeker/create')) }}
	<div>
		{{ Form::label('applicants_name', 'Applicants Name:') }}
		{{ Form::text('applicants_name', null, ['class'=>'form-control']) }}
	</div>

	<div>
		{{ Form::label('fathers_name', 'Fathers Name:') }}
		{{ Form::text('fathers_name', null, ['class'=>'form-control']) }}
	</div>

	<div>
		{{ Form::label('mothers_name', 'Mothers Name:') }}
		{{ Form::text('mothers_name', null, ['class'=>'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::submit('Create Task', ['class'=>'btn btn-primary']) }}
	</div>
	<div>
		{{ Form::close() }}
	</div>
@stop