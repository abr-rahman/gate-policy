@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @can('isAdmin')
                <a href="{{ route('post.create') }}" class="btn btn-success p-2 float-right">Create</a>
            @endcan
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th class="text-center">Description</th>
                            <th>User Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td scope="row">{{ $post->user_id}}</td>
                            <td>{{ $post->title }}</td>
                            <td class="text-center">{{ $post->description }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->user->id }}</td>
                            <td>
                                @can('postView', $post)
                                    <a href="{{ route('post.show', $post) }}" class="btn btn-success">View</a>
                                @endcan

                                @can('delete', $post)
                                    <form action="{{ route('post.delete', $post) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger m-2">Delete</button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
