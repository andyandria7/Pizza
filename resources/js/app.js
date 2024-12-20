import '../css/app.css';
import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init(); // Initialize AOS globally
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
        setup({ el, App, props, plugin }) {
            const app = createApp({ render: () => h(App, props) });
    
            // Ajouter Inertia plugin
            app.use(plugin);
    
            // Ajouter Ziggy (pour les routes)
            app.use(ZiggyVue, Ziggy);
    
           // Ajouter $page comme propriété globale en lecture seule
       // Vérifier si $page existe déjà avant de la définir
       if (!Object.prototype.hasOwnProperty.call(app.config.globalProperties, "$page")) {
        Object.defineProperty(app.config.globalProperties, "$page", {
            get() {
                return props.initialPage; // Renvoie l'objet initial de la page Inertia
            },
        });
    }
            app.mount(el);
        },
    progress: {
        color: '#4B5563',
    },
});
