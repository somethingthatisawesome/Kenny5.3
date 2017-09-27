@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/agen_profiles') }}">Agen Profile</a> :
@endsection
@section("contentheader_description", $agen_profile->$view_col)
@section("section", "Agen Profiles")
@section("section_url", url(config('laraadmin.adminRoute') . '/agen_profiles'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Agen Profiles Edit : ".$agen_profile->$view_col)

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
				{!! Form::model($agen_profile, ['route' => [config('laraadmin.adminRoute') . '.agen_profiles.update', $agen_profile->id ], 'method'=>'PUT', 'id' => 'agen_profile-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'address')
					@la_input($module, 'city')
					@la_input($module, 'ward')
					@la_input($module, 'long')
					@la_input($module, 'lat')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/agen_profiles') }}">Cancel</a></button>
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
	$("#agen_profile-edit-form").validate({
		
	});
});
</script>
@endpush
