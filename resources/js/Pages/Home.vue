<template>
        <Head>
            <title>Home</title>
        </Head>


     <section class="w-full pt-12 mx-auto">
            <CardPresentation />
        </section>
       
        <section class="mx-auto mt-24 space-y-16 my-36">
            <h2 class="text-3xl font-bold text-center text-light-pink">Recent projects</h2>
            <div class="space-y-20">
                <CardProject v-for="(project, index) in projects" :key="index" :project="project" />
            </div>
        </section>

        <section class="mx-auto space-y-16 mb-36 w-max">
            <h2 class="text-3xl font-bold text-center text-light-pink">CONTACT</h2>
            <ContactForm />
        </section>
</template>

<script setup>
import CardProject from '../Shared/CardProject';
import ContactForm from '../Shared/ContactForm';
import CardPresentation from '../Shared/CardPresentation';

defineProps({
    projects: Object,
});

</script>

<style>
.slide-fade-enter-active {
  transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateX(20px);
  opacity: 0;
}
</style>
