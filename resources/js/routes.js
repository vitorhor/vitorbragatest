import NotFound from "./components/NotFound";
import Home from "./components/Home";
import Contact from "./components/Contact";

export default {
    mode: 'history',

    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            redirect: '/home'
        },
        {
            path: '/home',
            component: Home,
            name: 'home'
        },
        {
            path: '/contact',
            component: Contact,
            name: 'contact'
        }
    ]
}
