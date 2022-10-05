import {createStore} from 'vuex';
import tests from './tests';

export default createStore({
    namespaced: true,

    modules: {
        tests,
    },
});
