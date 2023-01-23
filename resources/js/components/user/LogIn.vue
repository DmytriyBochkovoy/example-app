<template>
    <div class="container">
        <form
            @submit.prevent="login">
            <div class="form-floating my-2">
                <input v-model="auth.email" type="email" name="email" class="form-control" id="floatingInput"
                       placeholder="name@example.com">
                <label for="floatingInput">Эл. почта</label>
            </div>
            <div class="form-floating my-2">
                <input v-model="auth.password" type="password" name="password" class="form-control"
                       id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
        </form>
        <div class="text-center fs-5 mt-2">
            <router-link class="text-color" to="/registration">Зарегистрироваться</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "LogIn",

    data() {
        return {
            auth: {
                email: "",
                password: ""
            },
            validationErrors: {},
            processing: false,
            statusAuth: null,
        }
    },

    methods: {
        login() {
            this.$store.dispatch("users/login", this.auth);

            if (this.statusAuthenticated) {
                this.$router.push({name: 'TestsUser'})
            }
        },
        statusAuthenticated() {
            return this.$store.getters['users/authenticated']
        }
    },
}
</script>

<style scoped>

</style>
