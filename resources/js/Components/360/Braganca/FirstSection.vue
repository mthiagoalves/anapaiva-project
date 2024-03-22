<script setup>
import GalleryImage from "@/Components/360/Braganca/GalleryImage.vue";

</script>
<template>
    <div class="max-w-full">
        <img
            class="h-auto max-w-full hidden sm:block"
            src="https://dummyimage.com/1920x700/379662/fff"
            alt=""
        />
        <img
            class="h-auto max-w-full ml-auto block sm:hidden"
            src="https://dummyimage.com/1000x1000/379662/fff"
            alt=""
        />
    </div>

    <div class="max-w-screen-xl mt-24 mb-20 mx-auto">
        <h2 class="titles-aurelie">Braganca Apartment</h2>
        <p class="sub-title-first-section px-5 sm:px-60">
            Step into this timeless apartment, where the past meets the present
            in unmatched harmony. Each space is meticulously designed to
            encapsulate the essence of both classic and contemporary, creating
            an atmosphere of eternal sophistication. From the living room to the
            master bedroom, every area is a masterpiece of timeless elegance and
            modern design, celebrating timelessness in every detail. In every
            corner of the Campo Pequeno Apartment, a story is told through a
            meticulous selection of colors, furniture, and accessories.
        </p>
        <GalleryImage> </GalleryImage>
    </div>
</template>
