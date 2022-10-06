import { createRouter, createWebHistory } from 'vue-router';
import TestsUser from "../components/TestsUser.vue";
import TestPass from "../components/TestPassUser.vue";

const routes = [
    {
        path: '/tests-user',
        name: 'TestsUser',
        component: TestsUser
    },
    {
        path: '/tests-user/:id',
        name: 'tests-user-id',
        component: TestPass,
        props: true,
    },
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router
