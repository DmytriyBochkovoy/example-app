import {createRouter, createWebHistory} from 'vue-router';
import TestsUser from "../components/TestsCatalog.vue";
import TestPass from "../components/TestPassUser.vue";
import TestResult from "../components/TestResult.vue";
import Registration from "../components/user/Registration.vue";
import LogIn from "../components/user/LogIn.vue";
import store from "../store";
import {isEmpty} from "lodash/lang";

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
        path: '/registration',
        name: 'registration',
        component: Registration
    },
    {
        path: '/authenticate',
        name: 'login',
        component: LogIn
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

router.beforeEach((to, from, next) => {
    let authUser = store.state.users.user;

    if(isEmpty(authUser)) {
        store.dispatch('users/authUser');
        return next();
    }

    return next();
})

export default router
