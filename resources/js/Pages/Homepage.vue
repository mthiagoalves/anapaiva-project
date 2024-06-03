<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import BannerTop from "@/Components/BannerTop.vue";
import FirstSection from "@/Components/FirstSection.vue";
import PressArea from "@/Components/PressArea.vue";
</script>

<template>

    <Head>
        <title>Ana Paiva</title>
    </Head>

    <MainLayout>
        <template #main>
            <BannerTop />
            <FirstSection />
            <PressArea />
        </template>
    </MainLayout>
</template>
