<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import FirstSection from "@/Components/Projects/Guimaraes/FirstSection.vue";
</script>

<template>
    <Head>
        <title>Guimaraes Heritage Residence - Project</title>
    </Head>

    <MainLayout>
        <template #main>
            <FirstSection> </FirstSection>
        </template>
    </MainLayout>
</template>
