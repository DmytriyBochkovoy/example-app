<template>
    <section class="container">
        <div class="my-3 d-flex">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">TESTING</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item bgn-hover"><router-link class="nav-link text-color" to="/login">Войти</router-link></li>
            </ul>
        </div>
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom border-top">
            <ul class="nav nav-pills">
                <li class="nav-item bgn-hover"><a href="/" class="nav-link text-color" aria-current="page">Главная</a></li>
                <li class="nav-item bgn-hover"><router-link class="nav-link text-color" to="/tests/user">Тесты</router-link></li>
                <li class="nav-item bgn-hover"><a href="#" class="nav-link text-color">О проекте</a></li>
                <li class="nav-item bgn-hover"><a href="#" class="nav-link text-color">Результаты тестирования</a></li>
                <li class="nav-item bgn-hover"><a href="#" class="nav-link text-color">Мероприятия</a></li>
                <li class="nav-item bgn-hover"><a href="#" class="nav-link text-color">Опрос</a></li>
                <li class="nav-item bgn-hover"><a href="{{ route('tests') }}" class="nav-link text-color">Редактирование тестов</a></li>
            </ul>
        </header>
    </section>
</template>

<script>
export default {
    name: "ThisHeader"
}
</script>

<style scoped>
    .bgn-hover:hover {
        background-color: cornflowerblue;
        border-radius: 5px;
    }
    .text-color:hover {
        color: white;
    }
</style>
