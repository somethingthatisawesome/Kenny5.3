@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/colors') }}">Color</a> :
@endsection
@section("contentheader_description", $color->$view_col)
@section("section", "Colors")
@section("section_url", url(config('laraadmin.adminRoute') . '/colors'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Colors Edit : ".$color->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($color, ['route' => [config('laraadmin.adminRoute') . '.colors.update', $color->id ], 'method'=>'PUT', 'id' => 'color-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'code')
					@la_input($module, 'hex')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/colors') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#color-edit-form").validate({
		
	});
});
</script>
@endpush
