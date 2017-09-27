@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/color_themes') }}">Color Theme</a> :
@endsection
@section("contentheader_description", $color_theme->$view_col)
@section("section", "Color Themes")
@section("section_url", url(config('laraadmin.adminRoute') . '/color_themes'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Color Themes Edit : ".$color_theme->$view_col)

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
				{!! Form::model($color_theme, ['route' => [config('laraadmin.adminRoute') . '.color_themes.update', $color_theme->id ], 'method'=>'PUT', 'id' => 'color_theme-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'hex')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/color_themes') }}">Cancel</a></button>
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
	$("#color_theme-edit-form").validate({
		
	});
});
</script>
@endpush
