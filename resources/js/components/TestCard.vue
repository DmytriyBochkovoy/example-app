<template>
    <div class="col">
        <div class="card shadow-sm">
            <a href="#"
               class="btn btn-sm  bg-secondary fs-4 py-5">{{test.name}}</a>
            <div class="card-body">
                <p class="card-text">Описание теста: {{test.description}}</p>
                <div class="my-3">Количество вопросов в тесте: {{test.questions_count}}</div>
            </div>
            <div class="text-center">
                <router-link :to="{name: 'tests-user-id', params: {id: test.id}}" class="fs-5 my-2 btn btn-sm btn-outline-success">Пройти тест</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "TestCard",

    props: {
        test: {
            type: Object,
            required: true,
        },
    },
}
</script>

<style scoped>

</style>
