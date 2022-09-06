@extends('index')

@section('title')
    Редактор тестов
@endsection

@section('fonts')
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
@endsection

@section('main')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center mb-3">
                <span class="fs-4">
                    Форма создания теста
                </span>
            </div>
            <div class="col-12">
                <form action="{{ route('test-create') }}" method="POST">
                    @csrf
                    <div class="form-group border border-primary fs-5 rounded-3">
                        <div class="mb-3 px-5 py-3">
                            <label for="nameTest" class="form-label">Название теста</label>
                            <input type="text" class="form-control" id="nameTest" name="name">
                        </div>
                        <div class="mb-3 px-5 py-3">
                            <label for="descriptionTest" class="form-label">Описание теста</label>
                            <input type="text" class="form-control" id="descriptionTest" name="description">
                        </div>
                        <div class="text-center my-3">
                            <button type="submit" class="btn btn-success">Добавить тест</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
