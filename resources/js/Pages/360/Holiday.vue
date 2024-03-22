<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import FirstSection from "@/Components/360/Holiday/FirstSection.vue";
</script>

<template>
    <Head>
        <title>Holiday - 360°</title>
    </Head>

    <MainLayout>
        <template #main>
            <FirstSection> </FirstSection>
        </template>
    </MainLayout>
</template>
