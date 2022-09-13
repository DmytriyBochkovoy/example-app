@extends('index')

@section('title')
    Главная
@endsection()

@section('main')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Проект: Тестирование персонала.</h1>
                <p class="lead text-muted">Совершенствование подходов к разработке и использованию интерактивных
                    обучающих материалов для учебных предметов (предметных областей)
                    в общеобразовательных организациях в условиях развития современной
                    цифровой образовательной среды</p>
                <p>
                    <a href="{{ route('tests') }}" class="btn btn-primary my-2">Перейти в каталог тестов</a>
                </p>
            </div>
        </div>
    </section>
@endsection

