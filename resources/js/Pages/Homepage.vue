<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import BannerTop from "@/Components/BannerTop.vue";
import FirstSection from "@/Components/FirstSection.vue";
</script>

<template>
    <Head>
        <title>Ana Paiva Decor</title>
    </Head>

    <MainLayout>
        <template #main>
            <BannerTop> </BannerTop>
            <FirstSection> </FirstSection>

            <div class="min-h-screen max-w-full bg-gray-500 bg-opacity-0"></div>
        </template>
    </MainLayout>
</template>
