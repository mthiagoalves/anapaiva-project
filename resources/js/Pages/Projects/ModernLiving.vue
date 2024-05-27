<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import FirstSection from "@/Components/Projects/ParqueDasNacoes/FirstSection.vue";
</script>

<template>
    <Head>
        <title>Parque  das Nações - Projects</title>
    </Head>

    <MainLayout>
        <template #main>
            <FirstSection> </FirstSection>
        </template>
    </MainLayout>
</template>
