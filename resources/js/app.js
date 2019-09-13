/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-resource'));
import VueRouter from 'vue-router';
import Multiselect from 'vue-multiselect';
// import VueResource from 'vue-resource';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#character-creator',
    data: {
      name: 'Character',
      race: 1,
      profession: {
        id: 1,
        name: 'Artificer',
        description: 'A supreme inventor and a master of unlocking magic in everyday objects.'
      },
      hasSpells: ["3","5","6","9","10","12","13"],
      spells: [],
    },
    methods: {
      professionChanged() {
        if (jQuery.inArray(this.profession.id, this.hasSpells) !== -1) {
          var url = "/get_spells/" + this.profession.id;
          this.$http.get(url).then(function(response) {
            this.spells = response.data;  
          });
        } else {
          this.spells = [];
        }
        var url = "/get_profession/" + this.profession.id;
        this.$http.get(url).then(function(response) {
          var responseData = response.data;
          this.profession.name = responseData.name;  
          this.profession.description = responseData.description;  
        });
      }
    }
});
