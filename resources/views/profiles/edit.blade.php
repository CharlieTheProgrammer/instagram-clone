@extends('layouts.app')

@section('content')
<div class="container">
	<div class="justify-content-center mt-4 mx-4" style="max-width: 935px;">
		<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post" novalidate autocomplete="off">
			@csrf
			@method('PATCH')
			<div class="col-8 offset-2">
				<div class="row">
					<h2>Edit Profile</h2>
				</div>
				<div class="form-group row">
					<label for="title" class="col-md-4 col-form-label">Title</label>
					<input id="title" type="title" class="form-control @error('title') is-invalid @enderror" title="title" name="title" value="{{ old('title') ?? $user->profile->title}}" required>
					@error('title')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group row">
					<label for="description" class="col-md-4 col-form-label">Description</label>
					<input id="description" type="description" class="form-control @error('description') is-invalid @enderror" description="description" name="description" value="{{ old('description')  ?? $user->profile->description }}" required>
					@error('description')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group row">
					<label for="url" class="col-md-4 col-form-label">Url</label>
					<input id="url" type="url" class="form-control @error('url') is-invalid @enderror" url="url" name="url" value="{{ old('url')  ?? $user->profile->url }}" required>
					@error('url')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="form-group row">
					<label for="image" class="col-md-4 col-form-label">Profile Image</label>
					<input type="file" class="form-control-file" name="image" id="image" required>
					@error('image')
					<span class="invalid-feedback d-block" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="row my-4">
					<button type="submit" class="btn btn-primary">Save Profile</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection