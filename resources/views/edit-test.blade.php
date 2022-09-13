@extends('template-edit')

@section('body-editor')
    <div class="container mt-5">
        <div class="row">
            <form action="{{ route('update-test', $test->id) }}" method="POST">
                @csrf
                <div class="form-group fs-5">
                    <div class="mb-3 px-5 py-3">
                        <label for="nameTest" class="form-label">Название теста</label>
                        <input type="text" class="form-control" id="nameTest" name="name" value="{{$test->name}}">
                    </div>
                    <div class="mb-3 px-5 py-3">
                        <label for="descriptionTest" class="form-label">Описание теста</label>
                        <input type="text" class="form-control" id="descriptionTest" name="description"
                               value="{{$test->description}}">
                    </div>
                    <div class="text-center my-3">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
