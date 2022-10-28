import './bootstrap';
import { createApp } from 'vue';
import Alpine from 'alpinejs';
import LoaderComponent from './component/LoaderComponent.vue'

window.Alpine = Alpine;
// createApp(LoaderComponent).mount('#Loader');
// let Emitter = require('tiny-emitter');
// window.emitter = new Emitter();
Alpine.start();
