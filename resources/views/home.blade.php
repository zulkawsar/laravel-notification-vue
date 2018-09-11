@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ url('posts') }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title"> Title </label>
                            <input class="form-control" name="title" id="title" value="{{old('title')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="body"> Body </label>
                            <textarea class="form-control" rows="6"  name="body" id="body">{{old('body')}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Posts</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Title</th>
                              <th scope="col">Body</th>
                              <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                              <td>{{ $post->title }}</th>
                              <td>{{ $post->body }}</th>
                              <td>
                                  <button class="btn btn-info btn-xs">Edit</button>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
