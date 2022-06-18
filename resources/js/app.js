require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp, Link } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Master from '@/Layouts/Master';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'tırnak içinde dergi';

createInertiaApp({
    title: (title) => `${title} | ${appName}`,
    resolve: name => {
        const page = require(`./Pages/${name}.vue`).default
        if (page.layout === undefined && !name.startsWith('Auth/')) {
            page.layout = Master
        }
        return page
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .component('Link', Link)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
