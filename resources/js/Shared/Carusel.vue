<template>
  <section class="mx-auto space-y-6">
        <div class="relative w-full mx-auto border-2 border-black hero-card bg-water-green rounded-xl">
            <div class="absolute top-0 bottom-0 flex items-center justify-center w-20 h-20 my-auto border-2 border-black rounded-full cursor-pointer -left-10 bg-blue">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </div>
            <div class="absolute top-0 bottom-0 flex items-center justify-center w-20 h-20 my-auto border-2 border-black rounded-full cursor-pointer -right-10 bg-blue">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </div>
            <img class="object-cover object-center w-full h-full rounded-xl" src="/imgs/streetThumbnail.webp" alt="" >
        </div>
        <div class="flex flex-wrap gap-3 mx-auto w-max">
            <div class="px-3 py-1 text-black bg-white border-2 border-black border-dashed w-max rounded-xl" v-for="(tech, index) in project.tech" :key="index">{{ tech }}</div>
        </div>
    </section>
</template>

<script setup>
import { inject } from 'vue';

let project = inject('project');
</script>

<style>

</style>