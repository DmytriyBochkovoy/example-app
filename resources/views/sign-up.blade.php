<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->

    @yield('fonts')

    <!-- Styles -->

    @yield('style')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-center">
<main class="form-signin">
    @if($errors->any())
        <ul class="bg-danger">
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('sign-up-save')}}" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
        <div class="form-floating my-2">
            <input type="text" name="name" class="form-control" id="floatingInputName" placeholder="name@example.com">
            <label for="floatingInputName">Имя</label>
        </div>
        <div class="form-floating my-2">
            <input type="email" name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
            <label for="floatingInputEmail">Эл. почта</label>
        </div>
        <div class="form-floating my-2">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Придумайте пароль</label>
        </div>
        <button class="w-100 btn btn-lg btn-success" type="submit">Зарегистрироваться</button>
    </form>
</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
</script>
</html>
