@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h1>Crea Post</h1>
        </header>
        <hr>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="title" value="{{ old('title') }}" name="title"
                            required minlength="5" maxlength="50">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea class="form-control" id="content" name="content" required>{{ old('title') }}</textarea>
                    </div>
                </div>
                <div class="col-11">
                    <div class="form-group">
                        <label for="image">Immagine</label>
                        <input type="url" class="form-control" id="image" name="image"
                            value="{{ old('image') }}">
                    </div>
                </div>
                <div class="col-1">
                    <img class="img-fluid"
                        src="https://media.istockphoto.com/vectors/thumbnail-image-vector-graphic-vector-id1147544807?k=20&m=1147544807&s=612x612&w=0&h=pBhz1dkwsCMq37Udtp9sfxbjaMl27JUapoyYpQm0anc="
                        alt="">
                </div>
            </div>
            <hr>
            <footer class="d-flex justify-content-between">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                    <i class="fa-solid fa-rotate-left"></i> indietro
                </a>
                <button class="btn btn-success" type="submit">
                    <i class="fa-solid fa-floppy-disk"></i> Salva
                </button>
            </footer>
        </form>
    </div>
@endsection
