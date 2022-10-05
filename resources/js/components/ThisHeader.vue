<template>
    <section class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Testing</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Главная</a></li>
                <li class="nav-item"><router-link class="nav-link fw-bolder" to="/tests-user">Тесты</router-link></li>
                <li class="nav-item"><a href="#" class="nav-link">О проекте</a></li>
                <li class="nav-item"><a href="{{ route('tests-result') }}" class="nav-link">Результаты тестирования</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Мероприятия</a></li>
                <li class="nav-item"><a href="#" class="nav-link">опрос</a></li>
                <li class="nav-item"><a href="{{ route('tests') }}" class="nav-link">Редактирование тестов</a></li>
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

</style>
