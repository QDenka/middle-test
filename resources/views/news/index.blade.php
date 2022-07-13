@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row mb-2 filter">
                <form action="{{ route('home.news') }}" method="GET">
                    <div class="col-md-6">
                        <select class="form-select" name="category_id" required>
                            <option disabled>Выберите категорию</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if(request()->get('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn mt-1 btn-primary">Фильтровать</button>
                        @if (request()->get('category_id') != null)
                            <a href="{{ route('home.news') }}" class="btn mt-1 btn-danger">Сбросить</a>
                        @endif
                    </div>
                </form>
            </div>
            <div class="row mb-2">
                @foreach ($news as $item)
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong
                                    class="d-inline-block mb-2 text-primary">{{ $item->category->name ?? 'Без категории' }}</strong>
                                <a href="{{ route('home.news.show', $item) }}"
                                    class="mb-0 text-decoration-none h3 text-dark">{{ $item->name }}</a>
                                <div class="mb-1 text-muted">{{ $item->string_created }}</div>
                                <p class="card-text mb-auto">{{ Str::limit($item->text, 120, ' ...') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex">
                    {!! $news->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
