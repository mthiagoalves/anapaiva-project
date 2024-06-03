<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Pagination, Autoplay } from "swiper/modules";
import Modal from "@/Components/Modal.vue";

import "swiper/css";
import "swiper/css/pagination";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    data() {
        return {
            slidesPerView: 3.25,
        };
    },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log("slide change");
        };
        const images = [
            "https://dummyimage.com/825x1000/ababab/000000",
            "https://dummyimage.com/825x1000/ababab/000000",
            "https://dummyimage.com/825x1000/ababab/000000",
            "https://dummyimage.com/825x1000/ababab/000000",
            "https://dummyimage.com/825x1000/ababab/000000",
            "https://dummyimage.com/825x1000/ababab/000000",
            "https://dummyimage.com/825x1000/ababab/000000",
            "https://dummyimage.com/825x1000/ababab/000000"
        ];
        return {
            onSwiper,
            onSlideChange,
            modules: [Pagination, Autoplay],
            images,
        };
    },
    mounted() {
        window.addEventListener('resize', this.handleResize);
        this.handleResize();
    },
    destroyed() {
        window.removeEventListener('resize', this.handleResize);
    },
    methods: {
        handleResize() {
            if (window.innerWidth < 756) {
                this.slidesPerView = 1;
            } else {
                this.slidesPerView = 3.25;
            }
        },
    },
};
</script>
<template>
    <div>
        <h2 class="titles-aurelie">Press Area</h2>

        <swiper class="relative" :slides-per-view="slidesPerView" :space-between="10" :modules="modules" :pagination="{
            dynamicBullets: true,
        }" :centeredSlides="true" :centeredSlidesBounds="true" :autoplay="{
            delay: 3000,
            disableOnInteraction: false,
        }" :initialSlide="1" :loop="true" @swiper="onSwiper" @slideChange="onSlideChange">
            <swiper-slide v-for="(image, index) in images" :key="index" :style="{ backgroundImage: `url(${image})` }"
                class="background-slide" data-modal-target="modal-press" data-modal-toggle="modal-press">
                <div class="overlay">
                    <h3 class="title-banner">Press {{ index + 1 }}</h3>
                </div>
            </swiper-slide>
        </swiper>
    </div>
    <Modal> </Modal>
</template>



<style scoped>
.background-slide {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 500px;
    /* Adjust the height as needed */
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}

.overlay {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 25px 50px;
    border-radius: 10px;
}

.title-banner {
    color: #fff;
    text-align: center;
    font-family: "Aurelie";
    font-size: 2rem;
    /* Adjust the size as needed */
    font-weight: 400;
    user-select: none;
}

@media (max-width: 756px) {
    .background-slide {
        height: 300px;
        /* Adjust the height for mobile */
    }

    .title-banner {
        font-size: 1.5rem;
    }
}
</style>
