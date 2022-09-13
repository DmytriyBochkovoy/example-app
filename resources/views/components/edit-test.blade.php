<div class="row">
    <div class="col-4 text-center border border-3 border-end-0">
        <a href="{{ route('edit-test', $test->id) }}"
           class="fs-4 my-2 btn btn-sm btn-outline-success">Редактирование теста:</a>
    </div>
    <div class="col-4 text-center border border-3">
        <a href="{{ route('questions', $test->id) }}"
           class="fs-4 my-2 btn btn-sm btn-outline-success">Редактирование вопросов:</a>
    </div>
    <div class="col-4 text-center border border-3 border-start-0">
        <a href="{{ route('question', $test->id) }}"
           class="fs-4 my-2 btn btn-sm btn-outline-success">Редактирование ответов:</a>
    </div>
</div>
