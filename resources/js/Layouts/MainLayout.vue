<script setup>
import NavBar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";
import { computed } from "vue";

const isHomePage = computed(() => route().current("homepage"));
</script>

<template>
    <div>
        <NavBar> </NavBar>

        <slot name="main" />

        <Footer></Footer>
    </div>
</template>

<style scoped></style>
