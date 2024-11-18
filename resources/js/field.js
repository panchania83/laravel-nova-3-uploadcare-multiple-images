Nova.booting((Vue, router) => {
    Vue.component('index-uploadcare-image', require('./components/IndexField'));
    Vue.component('detail-uploadcare-image', require('./components/DetailField'));
    Vue.component('form-uploadcare-image', require('./components/FormField'));
})
