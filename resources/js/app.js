// Lodash
window._ = require('lodash');

// Axios
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;


// Vue
window.Vue = require('vue');

Vue.component('effect-slider', require('./components/EffectSlider.vue'));
Vue.component('effect-box', require('./components/EffectBox.vue'));

Vue.filter('capitalize', value => {
		if (!value) return ''
		value = value.toString()
		return value.charAt(0).toUpperCase() + value.slice(1)
});

const app = new Vue({
    el: '#app'
});
