<template>

        <HeaderProject />
    
        <Carusel />

        <CardSmall />
        
        <CardLarge :title="'Wireframes'" :text="'The wide collection of functional components in the UI required an extensive wireframing phase.'" />

        <CardLarge :title="'Functional Components'" :text="'With colors and design guidelines in place, components successfully merged with the playful tone acrross taggie´s brand image.'" />

        <section class="max-w-4xl pb-24 mx-auto">
            <div class="grid grid-cols-3 gap-3">
                <CardSmallImg />
                <CardSmallImg />
                <CardSmallImg />
            </div>
        </section>
        
        <section class="max-w-4xl pb-24 mx-auto space-y-3">
            <h3 class="font-bold text-center uppercase">API Integrations</h3>
            <div class="grid items-center justify-center grid-cols-2 gap-3">
                <div class="w-2/3 ml-auto">
                    <CardSmallImg />
                </div>
                <div class="w-2/3">
                    <CardSmallImg />
                </div>
            </div>
        </section>

        <Testimonial />
        
        <section class="max-w-4xl pb-24 mx-auto mt-24 space-y-6">
            <h2 class="text-3xl font-bold">MORE WORK IN ACTION</h2>
            <CardProject />
            <NextProjectBar />
        </section>
</template>

<script setup>
import Carusel from '../Shared/Carusel';
import CardSmall from '../Shared/CardSmall';
import CardLarge from '../Shared/CardLarge';
import CardSmallImg from '../Shared/CardSmallImg';
import Testimonial from '../Shared/Testimonial';
import CardProject from '../Shared/CardProject';
import NextProjectBar from '../Shared/NextProjectBar';
import HeaderProject from '../Shared/HeaderProject';
    
defineProps({
    name: String,
});
    
</script>

<style>

</style>