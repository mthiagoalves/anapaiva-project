<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import FirstSection from "@/Components/Projects/Geres/FirstSection.vue";
</script>

<template>
    <Head>
        <title>Geres House - Projects</title>
    </Head>

    <MainLayout>
        <template #main>
            <FirstSection> </FirstSection>
        </template>
    </MainLayout>
</template>
