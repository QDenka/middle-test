@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ isset($news->id) ? route('news.update', $news) : route('news.store') }}" method="POST" class="row col-sm-10 offset-sm-1 g-3 card">
            @csrf
            @isset($news->id)
                @method('PUT')
            @endisset

            <div class="col-12 mb-3">
                <label for="category" class="form-label">Категория</label>
                <select class="form-select" name="category_id" required>
                    <option>Без категории</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if (isset($news->category->id) && $news->category->id === $category->id) selected @endif>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 mb-3">
                <label for="name" class="form-label">Заголовок</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Введите заголовок"
                    value="{{ $news->name ?? null }}" required>
            </div>
            <div class="col-12 mb-3">
                <label for="text" class="form-label">Текст новости</label>
                <textarea class="form-control" name="text" id="text" rows="3" placeholder="Введите текст новости"
                    required>{{ $news->text ?? null }}</textarea>
            </div>
            <div class="col-12 mb-3">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
