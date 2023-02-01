<template>
    <section class="container-fluid">
        <div class="my-3 d-flex">
            <router-link
                to="/home"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none"
            >
                <span class="mx-3 fs-4">TESTING</span>
            </router-link>
            <div
                v-if="auth() === true"
                class="d-flex align-items-center"
            >
                <div
                    class="rounded-circle bg-success"
                    style="min-width: 15px; min-height: 15px;"
                ></div>
                <div
                    class="mx-2 fs-5"
                >
                    {{ user.name }}
                </div>
                <Logout/>
            </div>
            <div v-if="auth() === false"
                 class="nav-item bgn-hover"
            >
                <router-link class="nav-link text-color" to="/authenticate">Войти</router-link>
            </div>
        </div>
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom border-top">
            <ul class="nav nav-pills fs-5">
                <li class="nav-item bgn-hover">
                    <router-link
                        class="nav-link text-color"
                        to="/home"
                    >
                        Главная
                    </router-link>
                </li>
                <li class="nav-item bgn-hover">
                    <router-link
                        class="nav-link text-color"
                        to="/tests/user"
                    >
                        Тесты
                    </router-link>
                </li>
                <li class="nav-item bgn-hover"><a href="#" class="nav-link text-color">О проекте</a></li>
                <li class="nav-item bgn-hover"><a href="#" class="nav-link text-color">Мероприятия</a></li>
                <li class="nav-item bgn-hover"><a href="#" class="nav-link text-color">Опрос</a></li>
                <li class="nav-item bgn-hover">
                    <router-link
                        class="nav-link text-color"
                        to="/tests/editing"
                    >
                        Редактирование тестов
                    </router-link>
                </li>
            </ul>
        </header>
    </section>
</template>

<script>

import Logout from "./user/Logout.vue";
import {isEmpty} from "lodash/lang";

export default {
    name: "ThisHeader",

    components: {
        Logout,
    },

    data() {
        return {
            user: {},
        }
    },

    methods: {
        auth() {
            return this.$store.getters['users/authenticated'];
        },
        userData() {
            this.user = this.$store.getters['users/user'];

            return this.user
        }
    },

    created() {
        this.userData();
    },

    updated() {
        this.userData();
    }

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
