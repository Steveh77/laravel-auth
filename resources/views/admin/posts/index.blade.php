@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="d-flex justify-content-between align-items-center">
            <h1>Lista Post</h1>
            <a class="btn btn-success" href="{{ route('admin.posts.create') }}">
                <i class="fa-solid fa-plus mr-2"></i>Aggiungi Post
            </a>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Modificato il</th>
                    <th>Azioni </th>
                </tr>
            </thead>
            <tbody>

                @forelse ($posts as $post)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td class="d-flex">
                            <a class="btn btn-sm btn-primary mx-2" href="{{ route('admin.posts.show', $post->id) }}">
                                <i class="fa-solid fa-eye mr-1"></i> Vedi
                            </a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">
                                    <i class="fa-solid fa-trash mr-3"></i>Elimina
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h2>Nessun Posts</h2>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
