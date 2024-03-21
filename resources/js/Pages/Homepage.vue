<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import BannerTop from "@/Components/BannerTop.vue";
</script>

<template>
    <Head>
        <title>Ana Paiva Decor</title>
    </Head>

    <MainLayout>
        <template #main>
            <BannerTop> </BannerTop>
        </template>
    </MainLayout>
</template>
