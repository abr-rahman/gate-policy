@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p class="text-success">{{ $post->user->name }}</p>
                    <h5>{{ $post->title }}</h5>
                </div>
                <div class="card-body">
                    <p>{{ $post->description }}</p>
                </div>
                <div class="card-footer">
                    {{ $post->created_at }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
