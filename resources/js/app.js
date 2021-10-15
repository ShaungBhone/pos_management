require("./bootstrap");

import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";

import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";

const appName =
    window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        const page = require(`./Pages/${name}`).default;
        if (page.layout === undefined) {
            page.layout = BreezeAuthenticatedLayout;
        }
        return page;
    },
    setup({ el, app, props, plugin }) {
        return createApp({
            render: () => h(app, props),
        })
            .use(plugin)
            .component("Link", Link)
            .component("Head", Head)
            .mixin({
                methods: {
                    route,
                },
            })
            .mount(el);
    },
});

InertiaProgress.init({
    color: "#12c2e9",
    showSpinner: true,
});
