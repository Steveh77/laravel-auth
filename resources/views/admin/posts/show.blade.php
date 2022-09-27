@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h1>{{ $post->title }}</h1>
        </header>
        <div class="clearfix">
            @if ($post->image)
                <img class="float-left mr-3" src="{{ $post->image }}" alt="">
            @endif

            <p>{{ $post->content }}</p>
            <div>
                <time><b>Creato il:</b>{{ $post->created_at }}</time>
            </div>
            <div>
                <time><b>Ultima modifica il:</b> {{ $post->updated_at }}</time>
            </div>
        </div>

        <hr>

        <footer class="d-flex align-items-center justify-content-end">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                <i class="fa-solid fa-rotate-left"></i> indietro
            </a>
        </footer>
    </div>
@endsection
