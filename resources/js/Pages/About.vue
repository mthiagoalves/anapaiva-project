<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import BannerTop from "@/Components/BannerTop.vue";
import FirstSection from "@/Components/About/FirstSection.vue";
</script>

<template>
    <Head>
        <title>About - Ana Paiva Decor</title>
    </Head>

    <MainLayout>
        <template #main>
            <FirstSection> </FirstSection>
        </template>
    </MainLayout>
</template>
