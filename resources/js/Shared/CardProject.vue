<template>
  <div class="relative grid w-full grid-cols-2 mx-auto text-black border-2 is-admin hero-card bg-water-green rounded-3xl">
        <div class="flex items-center h-full overflow-hidden bg-gray-800 rounded-3xl">
            <img class="object-contain w-full h-full" v-bind:src="'/imgs/' + project.thumbnail" alt="" >
        </div>
        <div class="pl-6">
            <div class="w-10/12 p-6 space-y-6">
                <h2 class="text-3xl font-bold ">{{ project.title }}</h2>
                <p>{{ project.about }}</p>
                <div class="flex flex-wrap gap-3">
                    <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl" v-for="(tech, index) in project.tech" :key="index">{{ tech }}</div>
                </div>
                <div class="relative z-10">
                    <Link v-bind:href="'/' + project.pathname" class="relative px-8 py-2 text-base font-bold text-black border-2 border-black bg-yellow rounded-xl btn-hero" type="button">view project</Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    project: Object,
})
</script>

<style>
    .is-admin {
        border-image-source: linear-gradient(266deg, #21c8f6 98%, #637bff -52%);
        border-image-slice: 1;
        background-image: linear-gradient(to bottom, rgb(0 191 166), rgb(0 191 166)), linear-gradient(266deg, #21c8f6 98%, #637bff -52%);
        background-origin: border-box;
        background-clip: content-box, border-box;
        border-color: transparent;
    }
</style>