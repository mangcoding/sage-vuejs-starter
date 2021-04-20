import Vue from 'vue';
import Vuex from 'vuex';
import 'es6-promise/auto';
import modules from './modules';

Vue.use(Vuex);

export default new Vuex.Store({
  modules,
  strict: process.env.NODE_ENV === 'development',
});
