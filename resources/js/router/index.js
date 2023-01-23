import { createRouter, createWebHistory } from 'vue-router';
import TestsUser from "../components/TestsCatalog.vue";
import TestPass from "../components/TestPassUser.vue";
import TestResult from "../components/TestResult.vue";
import Registration from "../components/user/Registration.vue";
import LogIn from "../components/user/LogIn.vue";

router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
        if (store.getters.isLoggedIn) {
            next()
            return
        }
        next('/login')
    } else {
        next()
    }
})

const routes = [
    {
        path: '/tests/user',
        name: 'TestsUser',
        component: TestsUser
    },
    {
        path: '/tests/:id/questions/user',
        name: 'tests-user-id',
        component: TestPass,
        props: true,
    },
    {
        path: '/tests/user/result',
        name: 'testResult',
        component: TestResult
    },
    {
        path:'/registration',
        name: 'registration',
        component: Registration
    },
    {
        path:'/login',
        name: 'login',
        component: LogIn
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router
