import { createRouter, createWebHistory } from 'vue-router';

import Home from '../components/Website/EN/Client/index.vue';
import Projects from '../components/Website/EN/Client/projects.vue';
import ListProperties from '../components/Website/EN/Client/listproperty.vue';
import SingleProperty from '../components/Website/EN/Client/singleproperty.vue';

import SingleProject from '../components/Website/EN/Client/singleproject.vue';
import About from '../components/Website/EN/Client/about.vue';
import Contactus from '../components/Website/EN/Client/contactus.vue';

import ListYourProperty from '../components/Website/EN/Client/listYourProperty.vue';
import RequestProperty from '../components/Website/EN/Client/requestProperty.vue';

import UserDashboard from '../components/Website/EN/Client/auth/dashboard.vue';
import UserProfile from '../components/Website/EN/Client/auth/profile.vue';
import MyFavourite from '../components/Website/EN/Client/auth/myfavourite.vue';



import ArHome from '../components/Website/AR/Client/index.vue';

// Admin Routes
import AdminHome from '../components/Website/EN/Admin/index.vue';


const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },
    {
        path: '/projects',
        name: 'Projects',
        component: Projects,
    },    
    {
        path: '/SingleProject',
        name: 'Single Project',
        component: SingleProject,
    },
    {
        path: '/about',
        name: 'About Us',
        component: About,
    },  
    {
        path: '/contactus',
        name: 'Contact US',
        component: Contactus,
    },

    {
        path: '/listproperty',
        name: 'ListProperties',
        component: ListProperties,
    },    
    {
        path: '/singleproperty',
        name: 'singleproperty',
        component: SingleProperty,
    },
    {
        path: '/listyourproperty',
        name: 'list your property',
        component: ListYourProperty,
    },
    {
        path: '/requestProperty',
        name: 'Request property',
        component: RequestProperty,
    },    
    {
        path: '/dashboard',
        name: 'user dashboard',
        component: UserDashboard,
    },    
    {
        path: '/userprofile',
        name: 'user profile',
        component: UserProfile,
    },
    {
        path: '/myfavourite',
        name: 'My Favourite',
        component: MyFavourite,
    },



    {
        path: '/ar',
        name: 'Arabic Home',
        component: ArHome,
    },
    // Admin Routes For Dashboard
    {
        path: '/admin',
        name: 'Admin Home',
        component: AdminHome,
    },

    // Add other routes here
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    const type = localStorage.getItem('type');
    const role = localStorage.getItem('role');
    if ((type === "user" && role == 2) || (type === "User" && role == 2)) {
        const restrictedPaths = ["/wp-admin", "/wp-admin/ar"];
        if (restrictedPaths.includes(to.path)) {
            next(false);
            window.location.href = "/";
        } else {
            next();
        }
    } else {
        next();
    }
});

export default router;