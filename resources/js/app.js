import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

import './../../vendor/power-components/livewire-powergrid/dist/powergrid'
 
// If you use Tailwind 
import './../../vendor/power-components/livewire-powergrid/dist/tailwind.css'

// If you use Bootstrap 5 
import './../../vendor/power-components/livewire-powergrid/dist/bootstrap5.css'
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
