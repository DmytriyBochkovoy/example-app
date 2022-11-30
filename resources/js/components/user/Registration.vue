<template>
    <div class="container">
        <form @submit.prevent="registration">
            <h1 class="h3 mb-3 fw-normal text-center">Регистрация</h1>
            <div class="form-floating my-2">
                <input v-model="auth.name" type="text" name="name" class="form-control" id="floatingInputName" placeholder="name@example.com">
                <label for="floatingInputName">Имя</label>
            </div>
            <div class="form-floating my-2">
                <input v-model="auth.email" type="email" name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Эл. почта</label>
            </div>
            <div class="form-floating my-2">
                <input v-model="auth.password" type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Придумайте пароль</label>
            </div>
            <button class="w-100 btn btn-lg btn-success" type="submit">Зарегистрироваться</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "Registration",

    data() {
        return {
            auth: {
                name: "",
                email: "",
                password: ""
            }
        }
    },

    methods: {
        registration() {
            this.$store.dispatch("users/registration", this.auth);
        }
    }
}
</script>

<style scoped>

</style>
