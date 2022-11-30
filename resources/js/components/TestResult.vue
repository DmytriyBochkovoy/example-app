<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center fs-5">
                    Ваш результат {{testResult}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center fs-5">Что-бы сохранить результат вам необходимо зарегистрироваться</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Result",

    computed: {
        testResult () {
            return this.$store.getters['tests/getTestResult'];
        }
    },
}
</script>

<style scoped>

</style>
