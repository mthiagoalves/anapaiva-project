<script setup>
import Footer from "@/Components/Footer.vue";
import NavBar from "@/Components/NavBar.vue";
import { onMounted } from "vue";
import { initFlowbite } from 'flowbite'


onMounted(() => {
    initFlowbite();
})
</script>

<template>
    <div>
        <NavBar> </NavBar>

        <slot name="main" />

        <Footer></Footer>
    </div>
</template>

<style scoped></style>
