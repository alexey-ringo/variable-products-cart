
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./admin_bootstrap');

window.Vue = require('vue');

//Импорт vue-роутера
import VueRouter from 'vue-router';

//Импорт собственного маршрутизатора
import router from './router';

//Импорт корневого компонента
import App from "./components/adminlte/App";

Vue.use(VueRouter);

const appLte = new Vue({
    el: '#admin-app',
    //компонент, который будет рендериться в начальный момент времени для админки
    render : h => h(App),
    router
});



