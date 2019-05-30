import VueRouter from 'vue-router';

//Импорт компонента
import Profile from './components/adminlte/Profile';
import Adminlte from './components/adminlte/Adminlte';
import Products from './components/adminlte/lteitems/Products.vue';
import Orders from './components/adminlte/lteitems/Orders.vue';
import Purchases from './components/adminlte/lteitems/Purchases.vue';



//Экспорт объекта VueRouter (который импортировали выше)
//В него передаем Литерал-Объект
export default new VueRouter({
    //В массиве routes в виде объектов будут перечислены маршруты (пути и связанные с ними конпоненты)
    routes : [
        {
            path: '/shop/:slug?', 
            name: 'category', 
            component: require('./components/CategoryComponent.vue')
            
        },
        //{
        //    path: '/a7dm0in3/products',
        //    component : Products
        //},
        {
            path: '/a7dm0in3',
            component : Adminlte,
            
            children: [
            // UserHome will be rendered inside User's <router-view>
            // when /user/:id is matched
            //{ path: '',  component: Adminlte },
				
            // UserProfile will be rendered inside User's <router-view>
            // when /user/:id/profile is matched
            { path: 'products',  name: 'adminproducts', component: Products },

            // UserPosts will be rendered inside User's <router-view>
            // when /user/:id/posts is matched
            { path: 'orders', name: 'adminorders', component: Orders },
            
            // UserPosts will be rendered inside User's <router-view>
            // when /user/:id/posts is matched
            { path: 'purchases', name: 'adminpurchases', component: Purchases },
            ]
        },
        
    ],
    //Запись всех перемещений пользователя по переходам
    mode: 'history'
    
});