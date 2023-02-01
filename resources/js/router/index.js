import {createRouter, createWebHistory} from 'vue-router';
import ThisHome from "../components/ThisHome.vue"
import TestsUser from "../components/TestsCatalog.vue";
import TestPass from "../components/TestPassUser.vue";
import TestResult from "../components/TestResult.vue";
import Registration from "../components/user/Registration.vue";
import LogIn from "../components/user/LogIn.vue";
import TestEditing from "../components/admin/ThisEditor.vue";
import store from "../store";
import {isEmpty} from "lodash/lang";
import ThisEditor from "../components/admin/ThisEditor.vue";

const routes = [
    {
        path: '/home',
        name: 'home',
        component: ThisHome,
    },
    {
        path: '/tests/user',
        name: 'TestsUser',
        component: TestsUser,
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
        component: TestResult,
    },
    {
        path: '/registration',
        name: 'registration',
        component: Registration,
    },
    {
        path: '/authenticate',
        name: 'login',
        component: LogIn,
    },
    {
        path: '/tests/editing',
        name: 'editing',
        component: ThisEditor,
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

router.beforeEach((to, from, next) => {
    let isAuth = store.state.users.authenticated;
    console.log(isAuth)

    if (to.name === 'tests-user-id' && !isAuth) {
        return next('/authenticate')
    } else {
        return next()
    }
})

// router.beforeEach((to, from, next) => {
//     let authUser = store.state.users.user;
//
//     if (isEmpty(authUser)) {
//         store.dispatch('users/authUser');
//         return next();
//     }
//
//     return next();
// })

// function checkAuthUser(to, from, next) {
//     console.log('checkAuthUser', store.state.users)
//     if (store.state.users.authenticated === false) {
//         return next('/authenticate')
//     } else {
//         return next();
//     }
// }

export default router
