@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    <div class="form-group p-2">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title"placeholder="">

                        <label for="">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="">
                        <div class="p-2">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
