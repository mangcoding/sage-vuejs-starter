import Vue from 'vue';
import store from './store';
import mixins from "./mixins";
import SvgVue from 'svg-vue';

import {
  LayoutPlugin,
  DropdownPlugin,
  CardPlugin,
  FormPlugin,
  FormGroupPlugin,
  FormInputPlugin,
  FormSelectPlugin,
  FormCheckboxPlugin,
  OverlayPlugin,
  ModalPlugin
} from 'bootstrap-vue';

window.axios = require("axios");
Vue.use(SvgVue);
Vue.use(ModalPlugin);
Vue.use(OverlayPlugin);
Vue.use(FormCheckboxPlugin);
Vue.use(FormSelectPlugin);
Vue.use(FormInputPlugin);
Vue.use(FormPlugin);
Vue.use(FormGroupPlugin);
Vue.use(LayoutPlugin);
Vue.use(CardPlugin);
Vue.use(DropdownPlugin);
Vue.mixin(mixins);

const files = require.context('./', true, /\.vue$/i);
files.keys().map((key) => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

window.Vue = Vue;

Vue.prototype.$settings = SETTINGS;
Vue.prototype.$assets = SETTINGS.asset_image;
Vue.config.productionTip = false;

new Vue({
  el: document.querySelector('#main'),
  store,
  beforeCreate() { },
  mounted() { },
  updated() { },
});