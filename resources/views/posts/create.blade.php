@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center mt-4 mx-4" style="max-width: 935px;">
        <form action="/p" enctype="multipart/form-data" method="post" novalidate autocomplete="off">

        @csrf
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Add New Post</h2>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption" type="caption" class="form-control @error('caption') is-invalid @enderror" caption="caption" name="caption" value="{{ old('caption') }}" required>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" required>

                    @error('image')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row my-4">
                    <button type="submit" class="btn btn-primary">Add New Post</button>
                </div>

            </div>
    </div>
    </form>
</div>
@endsection