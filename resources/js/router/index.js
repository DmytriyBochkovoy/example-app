import { createRouter, createWebHistory } from 'vue-router';
import TestsUser from "../components/TestsUser.vue";

const routes = [
    {
        path: '/tests-user',
        name: 'TestsUser',
        component: TestsUser
    },
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router
