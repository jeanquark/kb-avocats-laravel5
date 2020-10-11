
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/* Vee Validate */
import fr from 'vee-validate/dist/locale/fr';
import VeeValidate, { Validator } from 'vee-validate';
Vue.use(VeeValidate);
Validator.localize('fr', fr);

/* Vue Fontawesome */
import { library } from '@fortawesome/fontawesome-svg-core'
import { faCoffee } from '@fortawesome/free-solid-svg-icons'
import { faSpinner } from '@fortawesome/free-solid-svg-icons'
import { faPhone } from '@fortawesome/free-solid-svg-icons'
import { faFax } from '@fortawesome/free-solid-svg-icons'
import { faAt } from '@fortawesome/free-solid-svg-icons'
import { faAngleUp } from '@fortawesome/free-solid-svg-icons'
import { faAngleDown } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
library.add(faCoffee)
library.add(faSpinner)
library.add(faPhone)
library.add(faFax)
library.add(faAt)
library.add(faAngleUp)
library.add(faAngleDown)

Vue.component('font-awesome-icon', FontAwesomeIcon)

/* Vue Slide Up and Down */
// import SlideUpDown from 'vue-slide-up-down'
// Vue.component('slide-up-down', SlideUpDown)

/* Vue carousel */
// import { VueAgile } from 'vue-agile'
// Vue.component('vue-carousel', VueAgile)

// import { Carousel, Slide } from 'vue-carousel'
// Vue.component('vue-carousel', Carousel)
// Vue.component('vue-slide', Slide)

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
Vue.component('contact-form', require('./components/ContactForm.vue').default);
Vue.component('vue-carousel', require('./components/Carousel.vue').default);
Vue.component('lawyers-description', require('./components/LawyersDescription.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    created() {
    },
    data () {
		return {
			// showMoreCyril: false,
			// showMoreGabriele: false,
		}	
	},
	computed: {

	},
	methods: {
		// toggleShow (lawyer) {
		// 	// console.log('toggleShow: ', lawyer)
		// 	if (lawyer === 'cyril') {
		// 		this.showMoreCyril = !this.showMoreCyril
		// 	} else {
		// 		this.showMoreGabriele = !this.showMoreGabriele
		// 	}
		// }
	}
});
