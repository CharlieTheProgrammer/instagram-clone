@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center mt-4 mx-4" style="max-width: 935px;">
        <section id="profile-header" class="d-flex w-100 mb-5">
            <div class="m-5">
                <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 150px; width: 150px;">
            </div>
            <div class="d-flex flex-column justify-content-center ml-4">
                <div class="d-flex mb-2 align-items-center">
                    <div class="mr-3 lead">{{ $user->username}}</div>
                    <div class="mr-3"><button class="btn btn-sm btn-outline-secondary">Edit Profile</button></div>
                    <div class="mr-3"><button class="btn btn-sm btn-outline-secondary">Settings</button></div>
                    <div class="mr-3">
                        <a href="/p/create" class=""><button class="btn btn-sm btn-outline-secondary">Post</button></a>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="mr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="mr-4"><strong>29</strong> followers</div>
                    <div class="mr-4"><strong>39</strong> following</div>
                </div>
                <div><strong>{{ $user->name }}</strong></div>
                <div>Traveling abroad, enjoying life, and working hard at that #lifestyledesign. Let's make it happen! {{ $user->profile ?? 'N/A'}}</div>
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