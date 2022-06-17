<template>
    
    <section class="p-6">
        <div class="max-w-6xl mx-auto">
            <slot />
        </div>
    </section>

    <footer class="pb-8">
        <h5 class="font-bold text-center text-md">This web has been proudly crafted with Laravel, Vue & Inertia.js</h5>
    </footer>

</template>

<script>
import Nav from "./Nav";
import { Head } from "@inertiajs/inertia-vue3";

export default {
    components: { Nav, Head, },

};
</script>