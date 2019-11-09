@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session()->has('alert'))
                    <div class="alert {{ session()->get('alert-type')}}">
                        {{session()->get('alert')}}
                    </div>
                @endif
                <div class="card-header">Blog Index</div>

                <div class="card-body">
                    Display all the blog here

                    <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Created</th>
                                    <th>Submitted by</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id}}</td>
                                        <td>{{ $blog->title}}</td>
                                        <td>{{ $blog->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <a href="" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $blogs->links() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection