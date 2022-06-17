<template>
  <section class="pb-24 mx-auto mt-24 space-y-6">
        <div class="relative grid w-full max-w-4xl grid-cols-3 gap-3 mx-auto">
            <div class="relative col-span-2 border-2 border-black bg-blue rounded-xl hero-card"></div>
            <div class="relative px-8 py-16 bg-white border-2 border-black rounded-xl hero-card">
                <h3 class="font-bold uppercase">{{ title }}</h3>
                <p>{{ text }}</p>
            </div>
        </div>
    </section>
</template>

<script setup>
    defineProps({
    title: String,
    text: String,
    });
</script>

<style>

</style>