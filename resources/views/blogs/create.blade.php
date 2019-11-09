@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Boohoo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action = "" method = "POST">
                    @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name = "title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Put your title here">
                        </div>
                        <div class="form-group">
                            <label for="body">Description</label>
                            <input name= "body" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Fill in the description">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send!</button>
                            <a href ="{{ route('blog:index')}}" class="btn btn-link">Cancel</a>
                        <div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
