@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">
        <div>
            <h3>Управление новостями</h3>
            <a href="{{ route('news.create') }}" class="btn mb-3 btn-primary">Добавить новость</a>
        </div>
        <div class="row">
            <div class="row mb-2">
                @foreach ($news as $item)
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <div class="d-inline-block mb-2 btn-group">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                    <button onclick="location.href='{{ route('news.edit', $item) }}'" class="text-decoration-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0009b0"
                                            class="bi bi-pen" viewBox="0 0 16 16">
                                            <path
                                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                        </svg>
                                    </button>
                                    <form action="{{ route('news.destroy', $item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="#f00" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                        </button>
                                    </form>
                                    </div>
                                </div>
                                <a href="{{ route('news.show', $item) }}"
                                    class="mb-0 text-decoration-none h3 text-dark">{{ $item->name }} <i
                                        class="bi bi-trash"></i></a>
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
