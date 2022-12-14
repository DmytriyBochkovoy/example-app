`@extends('index')

@section('title')
    Добавление вопроса
@endsection

@section('fonts')
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
@endsection

@section('main')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-start">
                <a href="{{ route('tests') }}"
                   class="fs-5 m-3 btn btn-sm btn-outline-primary">
                    Вернуться в каталог тестов
                </a>
            </div>
            <div class="col-12">
                <form action="{{ route('question-create', $testId) }}" method="POST">
                    @csrf
                    <div class="form-group border border-primary fs-5 rounded-3">
                        <div class="mt-4 mb-1 px-5 py-1">
                            <p>Тест: {{$test->name}}</p>
                        </div>
                        <div class="mb-3 px-5 py-1">
                            <p>Выберите тему вопроса.</p>
                            <select class="form-select mt-3" aria-label="Default select example" name="type_id">
                                @foreach($questionTopic as $element)
                                    <option value="{{$element->id}}">{{$element->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 px-5 py-1">
                            <p>Выберите тип вопроса.</p>
                            <select class="form-select mt-3" aria-label="Default select example" name="question_type">
                                <option value="{{$questionTypes[0]->value}}">Один ответ</option>
                                <option value="{{$questionTypes[1]->value}}">Множественный ответ</option>
                            </select>
                        </div>
                        <div class="mb-3 px-5 py-3">
                            <label for="nameTest" class="form-label">Текст вопроса</label>
                            <input type="text" class="form-control" id="nameTest" name="text">
                        </div>
                        <div class="text-center my-3">
                            <button type="submit" class="btn btn-success">Сохранить вопрос</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection`
