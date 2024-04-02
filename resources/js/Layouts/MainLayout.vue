<script setup>
import Footer from "@/Components/Footer.vue";
import NavBar from "@/Components/NavBar.vue";
import { onMounted } from "vue";
import { initFlowbite } from 'flowbite'


onMounted(() => {
    initFlowbite();
})
</script>

<template class="max-w-screen-3xl">
    <div>
        <NavBar> </NavBar>

        <slot name="main" />

        <Footer></Footer>
    </div>
</template>
