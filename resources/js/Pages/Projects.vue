<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import BannerTop from "@/Components/BannerTop.vue";
import FirstSection from "@/Components/Projects/FirstSection.vue";
</script>

<template>
    <Head>
        <title>Projects - Ana Paiva Decor</title>
    </Head>

    <MainLayout>
        <template #main>
            <FirstSection> </FirstSection>
        </template>
    </MainLayout>
</template>
