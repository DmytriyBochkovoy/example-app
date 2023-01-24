import requestServerAPI from '../../api/requestServerAPI.js';
import axios from "axios";
import {commit} from "lodash/seq";
import {isEmpty} from "lodash/lang";

export default {
    login(context, data) {
        axios.get('/sanctum/csrf-cookie').then(response => {
            return axios.post('/api/authenticate', data).then((res) => {
                localStorage.setItem('token', res.config.headers['X-XSRF-TOKEN']);
                context.commit('setUser', res);
                context.commit('setAuthenticated', true);
            }).catch(({response: {data}}) => {
                console.log('ERROR')
            })
        });
    },
    registration(context, data) {
        axios.get('/sanctum/csrf-cookie').then(response => {
            return axios.post('/register', data).then((res) => {
                localStorage.setItem('token', res.config.headers['X-XSRF-TOKEN']);
                context.commit('setUser', res);
                context.commit('setAuthenticated', true);
            }).catch(({response: {data}}) => {
                console.log('ERROR')
            })
        });
    },
    authUser(context) {
        axios.get('/sanctum/csrf-cookie').then(response => {
            return axios.get('/api/user').then((res) => {
                context.commit('setUser', res)
                if (!isEmpty(res.data)) {
                    context.commit('setAuthenticated', true)
                }
            }).catch(({response: {data}}) => {
                console.log('ERROR')
            })
        });
    },
    logout(context) {
        axios.post('/logout').then(() => {
            localStorage.removeItem('token');
            context.commit('setUser', {});
            context.commit('setAuthenticated', false);
        }).catch(({response: {data}}) => {
            console.log('ERROR')
        });
    }
};
