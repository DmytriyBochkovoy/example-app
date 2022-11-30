import './bootstrap';
import '../css/app.css';

import {createApp} from "vue";

import router from "./router"
import store from "./store";

import HomeComponent from "./components/HomeComponent.vue";
// import TestsUser from "./components/TestsUser.vue";
import App from "./App.vue";

const app = createApp(App);

app.use(router)
    .use(store)
    .mount('#app');
