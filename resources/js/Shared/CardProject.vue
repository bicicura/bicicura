<template>
  <div class="relative flex w-full gap-6 mx-auto text-white border-2 border-light-pink hero-card bg-dark-pink rounded-3xl">
        <div class="max-w-sm">
            <div class="flex items-center h-full overflow-hidden bg-gray-800 rounded-3xl">
            <img class="object-cover w-full h-full" v-bind:src="'/imgs/' + project.thumbnail" alt="" >
        </div>
       
        </div>
        <div class="w-8/12 p-6">
            <div class="flex flex-col items-baseline justify-between gap-y-8">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold">{{ project.title }}</h2>
                    <p style="width: 35ch">{{ project.about }}</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-xl font-bold">Technology Stack</h3>
                    <div class="flex flex-wrap gap-3">
                        <div class="px-3 py-1 border-2 border-black border-dashed bg-light-pink w-max rounded-xl" v-for="(tech, index) in project.tech" :key="index">{{ tech }}</div>
                    </div>
                </div>
                 <div class="relative z-10 flex items-baseline justify-between gap-4">
                    <Link v-bind:href="'/' + project.pathname" class="relative px-8 py-2 text-base font-bold text-black border-2 border-black bg-complementary rounded-xl btn-hero" type="button">See more</Link>
                    <div class="flex gap-6 text-sm">
                        <a class="hover:underline" href="">Live Website</a>
                        <a class="hover:underline" href="">GitHub Repo</a>
                    </div>
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
   
</style>