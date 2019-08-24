@extends('layouts.app')

@section('content')
<div class="container">
	<div class="justify-content-center mt-4 mx-4" style="max-width: 935px;">
		<section id="profile-header" class="d-flex w-100 mb-5">
			<div class="m-5">
				<img src="/storage/{{ $user->profile->image }}" alt="User Profile Picture" class="rounded-circle" style="height: 150px; width: 150px;">
			</div>
			<div class="d-flex flex-column justify-content-center ml-4">
				<div class="d-flex mb-2 align-items-center">
					<div class="mr-3 lead">{{ $user->username}}</div>
					@can('update', $user->profile)
					<div class="mr-3">
						<a href="/profile/{{ $user->id }}/edit">
							<button class="btn btn-sm btn-outline-secondary">Edit Profile</button>
						</a>
					</div>
					<div class="mr-3">
						<a href="/">
							<!-- Are we doing a pop-up here? If so, then this need not be wrapped in an anchor tag. -->
							<button class="btn btn-sm btn-outline-secondary">Settings</button>
						</a>
					</div>
					<div class="mr-3">
						<a href="/p/create" class=""><button class="btn btn-sm btn-outline-secondary">Post</button></a>
					</div>
					@endcan
				</div>
				<div class="d-flex mb-2">
					<div class="mr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
					<div class="mr-4"><strong>29</strong> followers</div>
					<div class="mr-4"><strong>39</strong> following</div>
				</div>
				<div><strong>{{ $user->name }}</strong></div>
				<div>{{ $user->profile->description ?? ''}}</div>
			</div>
		</section>

		<section id="profile-grid">
			<nav id="profile-grid-nav" class="d-flex flex-row justify-content-center border border-left-0 border-right-0 border-bottom-0">
				<div class="mx-4 py-2">
					<a class="d-flex" href="">
						<div class="mx-1">icon</div>
						<div>Posts</div>
					</a>
				</div>
				<div class="mx-4 py-2">
					<a class="d-flex" href="">
						<div class="mx-1">icon</div>
						<div>igtv</div>
					</a>
				</div>
				<div class="mx-4 py-2">
					<a class="d-flex" href="">
						<div class="mx-1">icon</div>
						<div>Saved</div>
					</a>
				</div>
				<div class="mx-4 py-2">
					<a class="d-flex" href="">
						<div class="mx-1">icon</div>
						<div>Tagged</div>
					</a>
				</div>
			</nav>

			<div id="profile-grid-items" class="d-flex flex-wrap justify-content-around">
				@foreach($user->posts as $post)
				<div id="profile-grid-item" class="p-2">
					<a href="/p/{{ $post->id }}">
						<img src="/storage/{{ $post->image }}" alt="{{ $post->title }}" style="height: 270px; width: 270px">
					</a>
				</div>
				@endforeach
			</div>
		</section>
	</div>
</div>
@endsection