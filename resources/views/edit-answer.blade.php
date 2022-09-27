`@extends('index')

@section('title')
    Редактирование ответа
@endsection

@section('fonts')
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
@endsection

@section('main')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-start">
                <a href="{{ route('tests') }}"
                   class="fs-5 btn btn-sm btn-outline-primary">
                    Вернуться к вопросам
                </a>
            </div>
            <div class="col-12 text-center mb-3">
                <span class="fs-4">
                    Форма создания ответа к вопросу
                </span>
            </div>
            <div class="col-12">
                <form action="{{ route('update-answer', $answerId) }}" method="POST">
                    @csrf
                    <div class="form-group border border-primary fs-5 rounded-3">
                        <div class="mb-3 px-5 py-3">
                            <label for="descriptionTest" class="form-label">Ответ</label>
                            <input type="text" class="form-control" id="descriptionTest" name="text"
                                   value="{{$answer->text}}">
                        </div>
                        <div class="text-center my-3">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection`
