<template>
    <div class="container">
        <div
            class="d-flex justify-content-center"
        >
            <form class="border-form p-3"
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
                <button class="w-100 btn btn-lg btn-success" type="submit">Войти</button>
                <div class="text-center fs-5 mt-2">
                    <router-link class="text-color" to="/registration">Зарегистрироваться</router-link>
                </div>
            </form>
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
            this.$store.dispatch("users/login", this.auth).then(() => {
                this.$router.push({name: 'TestsUser'})
            });
        },
    },
}
</script>

<style scoped>
    .border-form {
        border: #a0aec0 solid 1px;
        border-radius: 5px;
    }
</style>
