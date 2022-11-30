import requestServerAPI from '../../api/requestServerAPI.js';
import axios from "axios";

export default {
    login(context, data){
        axios.get('/sanctum/csrf-cookie').then(response => {
            return axios.post('login', data).then(()=>{
                // context.commit('setUser',data)
                // context.commit('setAuthenticated', true)
            }).catch(({response:{data}})=>{
                // context.commit('setUser',{})
                // context.commit('setAuthenticated',false)
            })
        });
    },
    registration(context, data) {
        axios.get('/sanctum/csrf-cookie').then(response => {
            return axios.post('register', data).then(()=>{
                // context.commit('setUser',data)
                // context.commit('setAuthenticated', true)
            }).catch(({response:{data}})=>{
                // context.commit('setUser',{})
                // context.commit('setAuthenticated',false)
            })
        });
    },
    logout({commit}){
        commit('setUser', {})
        commit('setAuthenticated', false)
    }
};
