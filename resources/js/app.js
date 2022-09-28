/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-resource'));
import VueRouter from 'vue-router';

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
Vue Computation for Character Creation
**/
const app = new Vue({
    el: '#character-creator',
    data: {
      name: 'Character',
      race: {
        id: 1,
        name: 'Aarakocra',
        description: 'Sequestered in high mountains atop tall trees, the aarakocra, sometimes called birdfolk, evoke fear and wonder.',
      },
      profession: {
        id: 1,
        name: 'Artificer',
        description: 'A supreme inventor and a master of unlocking magic in everyday objects.',
        armors: [],
        equipment: [],
        equipmentOptionCount: 1,
      },
      equipmentList: [],
      alignment: {
        id: 1,
        name: 'Lawful Good',
        description: '<strong>The Crusader</strong> - You do good and follow the law to the T.</p><p>Obi Wan, Ned Stark, Captain America, Superman'
      },
      background: {
        id: 1,
        name: 'Acolyte',
        description: '',
      },
      hasSpells: ["3","5","6","7","9","10","12","13","14"],
      spells: [],
      spellText: '',
      languages: 0,
      languageList: [],
      languageLimitGroup: "language",
    },
    created:  function() {
      var url = "/get_equipment";
      this.$http.get(url).then(function(response) {
        this.equipmentList = response.data;
      });      
      var url = "/get_languages";
      this.$http.get(url).then(function(response) {
        this.languageList = response.data;
      });      
    },
    methods: {
      raceChanged() {
        var url = "/get_race/" + this.race.id;
        this.$http.get(url).then(function(response) {
          var responseData = response.data;
          this.race.name = responseData.name;  
          this.race.description = responseData.description;
          this.languages += responseData.languages;
        });
      },
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
        var url = "/get_profession_armor/" + this.profession.id;
        this.$http.get(url).then(function(response) {
          this.profession.armors = response.data;  
        });
        var url = "/get_profession_equipment/" + this.profession.id;
        this.$http.get(url).then(function(response) {
          this.profession.equipmentOptionCount = response.data[0];
          this.profession.equipment = response.data[1];  
        });
      },
      alignmentChanged() {
        var url = "/get_alignment/" + this.alignment.id;
        this.$http.get(url).then(function(response) {
          var responseData = response.data;
          this.alignment.name = responseData.name;  
          this.alignment.description = responseData.description;  
        });
      },
      backgroundChanged() {
        var url = "/get_background/" + this.background.id;
        this.$http.get(url).then(function(response) {
          var responseData = response.data;
          this.background.name = responseData.name;  
          this.background.description = responseData.description;  
          this.languages += responseData.languages;
        });
      },
      spellDescription(spell) {
        this.spellText = spell.description;
      },
      limit(limitGroup, limit) {
      	$('.limit-group-' + limitGroup + ':checked').each(function() {
          console.log($(this).data('limit') + " >? " + $('.limit-group-' + limitGroup + ':checked').length);
        	if ($(this).data('limit') < $('.limit-group-' + limitGroup + ':checked').length) {
          	this.checked = false;
          }
        });
      }
    }
});

console.log('test');
$('.limited').click(function(){
  console.log('test 2');
});
$('.limited').change(function(e) {
  console.log('asds');
  var limitGroup = $(this).data('limit-group');
  console.log(limitGroup);
	$('.limit-group-' + limitGroup + '/:checked').each(function() {
  	if ($(this).data('limit') > $('.limit-group-' + limitGroup + '/:checked').length) {
    	this.checked = false;
    }
  });
});