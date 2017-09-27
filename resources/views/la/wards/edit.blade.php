@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/wards') }}">Ward</a> :
@endsection
@section("contentheader_description", $ward->$view_col)
@section("section", "Wards")
@section("section_url", url(config('laraadmin.adminRoute') . '/wards'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Wards Edit : ".$ward->$view_col)

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
				{!! Form::model($ward, ['route' => [config('laraadmin.adminRoute') . '.wards.update', $ward->id ], 'method'=>'PUT', 'id' => 'ward-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'city')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/wards') }}">Cancel</a></button>
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
	$("#ward-edit-form").validate({
		
	});
});
</script>
@endpush
