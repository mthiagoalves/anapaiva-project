<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import BannerTop from "@/Components/BannerTop.vue";
import FirstSection from "@/Components/FirstSection.vue";
</script>

<template>
    <Head>
        <title>Ana Paiva</title>
    </Head>

    <MainLayout>
        <template #main>
            <BannerTop> </BannerTop>
            <FirstSection> </FirstSection>
        </template>
    </MainLayout>
</template>
