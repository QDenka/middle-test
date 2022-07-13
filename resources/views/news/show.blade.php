@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn mb-5 btn-primary">Назад</a>
        <article class="blog-post">
            <h2 class="blog-post-title">{{ $news->name }}</h2>
            <p class="blog-post-meta">{{ $news->created_at }}</p>

            <div class="news-text">
                {{ $news->text }}
            </div>
        </article>
    </div>
@endsection
