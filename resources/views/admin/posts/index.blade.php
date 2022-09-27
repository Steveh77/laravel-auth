@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista Post</h1>

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
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.posts.show', $post->id) }}">
                                <i class="fa-solid fa-eye mr-1"></i> Vedi
                            </a>
                        </td>
                    </tr>
                @empty
                    <h2>Nessun Posts</h2>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
