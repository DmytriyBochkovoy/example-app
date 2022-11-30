import {createStore} from 'vuex';
import tests from './tests';
import users from './users';

export default createStore({
    namespaced: true,

    modules: {
        tests,
        users,
    },
});
