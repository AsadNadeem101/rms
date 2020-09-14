import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

const HomeComponent=require('./components/HomeComponent.vue').default;
let routes=[
    {
        path:'/home/:product',
        component:HomeComponent,
        name:'HomeComponent',
    },

    {
     path: '/github',
     beforeEnter() {location.href = 'http://github.com'}
	}
    

];
const router=new VueRouter(
    {
        routes,
        mode:'history'
    }
);
export default router;