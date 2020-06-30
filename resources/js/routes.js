import VueRouter from "vue-router";
import bookables from "./bookables/Bookables";
import bookable from "./bookable/Bookable";

const routes = [
    {
        path: "/",
        component: bookables,
        name: "home"
    },
    {
        path: "/bookable/:id",
        component: bookable,
        name: "bookable"
    }
];

const router = new VueRouter({
        routes,
        mode: "history",
    });

export default router;
