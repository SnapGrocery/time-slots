
require('./bootstrap');
window.Vue = require('vue');

Vue.component('time-slot-component', require('./components/admin/settings/TimeSlot/TimeSlotComponent.vue').default);

const app = new Vue({
    el: '#app',
});
