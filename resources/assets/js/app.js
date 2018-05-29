
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data:{
        products:[],
        product_edit:{},
        product:{
            id:'',
            name:'',
            desc:'',
            price:'',
        },
        errors:[],
        edit_true:true
    },
    methods:{
        add_product(){
            axios.post('save-post',{
                name:this.product.name,
                desc:this.product.desc,
                price:this.product.price,
            })
                .then(response=>{
                    this.get_product()
                    // console.log(response)
                    this.product.name = '';
                    this.product.desc = '';
                    this.product.price = '';
                })

        },
        get_product(){
            axios.get('get-product')
            .then(response=>this.products = response.data)
        },
        delete_product(id,index){
            axios.get('del-product/'+id)
            .then(response=>this.products.splice(index,1))

        },
        edit_product(id){
            this.edit_true = false
           // this.product_edit = product;
            axios.get('edit-product/'+id)
            .then(response=>{
                var post =  response.data;
                this.product.id = post.id;
                this.product.name = post.name;
                this.product.desc = post.desc;
                this.product.price = post.price;
            })

        },
        update_product(){
            axios.post('update-post',{
                id:this.product.id,
                name:this.product.name,
                desc:this.product.desc,
                price:this.product.price,
            })
                .then(response=>{
                    this.get_product()
                    // console.log(response)
                    this.product.name = '';
                    this.product.desc = '';
                    this.product.price = '';
                })

        },
    },
    created(){
        this.get_product();
    }
});
