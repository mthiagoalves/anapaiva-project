<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import FirstSection from "@/Components/Projects/EspinhoSeasideRetreat/FirstSection.vue";
</script>

<template>
    <Head>
        <title>Espinho Seaside Retreat - Projects</title>
    </Head>

    <MainLayout>
        <template #main>
            <FirstSection> </FirstSection>
        </template>
    </MainLayout>
</template>
