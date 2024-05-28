<script setup>
import GalleryImage from "@/Components/Projects/Escritorios/GalleryImage.vue";

</script>
<template>
    <div class="max-w-full">
        <img class="h-auto max-w-full hidden sm:block" src="/imgs/projects/escritorios/capa.png" alt="" />
        <img class="h-auto max-w-full ml-auto block sm:hidden" src="/imgs/projects/escritorios/capa-m.png" alt="" />
    </div>

    <div class="max-w-screen-xl mt-24 mb-20 mx-auto">
        <h2 class="titles-aurelie"> Office Project</h2>
        <p class="sub-title-first-section px-5 sm:px-60">
            Step into a workspace that inspires creativity and productivity with our Office Project. Designed with the
            modern professional in mind, this office combines sleek design with functional spaces. Each area is
            optimized for efficiency and comfort, from collaborative workstations to private offices. The contemporary
            design features clean lines, high-quality materials, and thoughtful details that create a professional yet
            welcoming environment. The Office Project is where innovation meets practicality, making it the ideal place
            to work and grow.
        </p>
        <GalleryImage> </GalleryImage>
    </div>
</template>
