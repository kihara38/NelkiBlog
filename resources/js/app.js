import "./bootstrap";
import { createApp } from "vue";
import Alpine from "alpinejs";
import LoaderComponent from "./component/LoaderComponent.vue";
import Emitter from "tiny-emitter";

window.Alpine = Alpine;

// let Emitter = Emitter;
window.emitter = new Emitter();
createApp(LoaderComponent).mount("#Loader");
Alpine.start();
