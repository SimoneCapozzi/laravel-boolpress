@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>pagina index</h1>
        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('deleted') }}</strong>
                eliminata correttamente
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.posts.show', $post) }}">SHOW</a>
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('admin.posts.edit', $post) }}">EDIT</a>
                        </td>

                        <td>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>

                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>


@endsection
