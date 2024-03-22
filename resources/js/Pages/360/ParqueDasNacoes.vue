<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import FirstSection from "@/Components/360/ParqueDasNacoes/FirstSection.vue";
</script>

<template>
    <Head>
        <title>Parque  das Nações - 360°</title>
    </Head>

    <MainLayout>
        <template #main>
            <FirstSection> </FirstSection>
        </template>
    </MainLayout>
</template>
