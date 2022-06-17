<template>
  <form action="" class="relative grid max-w-xl grid-cols-2 gap-6 p-6 bg-white border-2 border-black rounded-xl hero-card">
        <div class="grid grid-rows-3 gap-4">
            <label class="block" for="name">
                <span class="text-sm font-bold">Full name*</span>
                <input type="text" id="name" class="block p-3 text-base border-2 border-black rounded-xl" placeholder="Full name">
            </label>
            <label class="block" for="email">
                <span class="text-sm font-bold">Email*</span>
                <input type="text" id="email" class="block p-3 text-base border-2 border-black rounded-xl" placeholder="Email address">
            </label>
            <label class="block" for="phone">
                <span class="text-sm font-bold">Phone</span>
                <input type="text" id="phone" class="block p-3 text-base border-2 border-black rounded-xl" placeholder="Phone number">
            </label>
        </div>
        <div class="flex flex-col justify-between gap-12">
            <label for="message" class="flex flex-col items-stretch h-full row-span-2 justify-items-stretch">
                <span class="text-sm font-bold">Message*</span>
                <textarea class="block w-full h-full p-3 border-2 border-black rounded-xl border-xl" name="" id="message" placeholder="Your message here..."></textarea>
            </label>
            
            <div class="relative z-10 block rows-span-1">
                <button class="relative w-full px-8 py-2 text-base text-white border-2 border-black bg-blue rounded-xl btn-hero" type="button">Message</button>
            </div>
        </div>
    </form>
</template>

<script setup>

</script>

<style>

</style>