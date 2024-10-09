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
            "/imgs/press/simulation-01.jpg",
            "/imgs/press/simulation-01.jpg",
            "/imgs/press/simulation-01.jpg",
            "/imgs/press/simulation-01.jpg",
            "/imgs/press/simulation-01.jpg",
            "/imgs/press/simulation-01.jpg",
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

        <swiper class="relative mb-32" :slides-per-view="slidesPerView" :space-between="10" :modules="modules" :pagination="{
            dynamicBullets: true,
        }" :centeredSlides="true" :centeredSlidesBounds="true" :initialSlide="1" :loop="true" @swiper="onSwiper"
            @slideChange="onSlideChange">
            <swiper-slide v-for="(image, index) in images" :key="index" data-modal-target="modal-press"
                data-modal-toggle="modal-press" class="relative">
                <a href="">
                    <img :src="image" alt="">
                    <div class="absolute w-full h-full flex justify-center items-center top-0 left-0">
                        <div class="overlay h-24">
                            <h3 class="title-banner">Press {{ index + 1 }}</h3>
                        </div>
                    </div>
                </a>
            </swiper-slide>
        </swiper>
    </div>
    <Modal> </Modal>
</template>



<style scoped>
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
    .title-banner {
        font-size: 1.5rem;
    }
}
</style>
