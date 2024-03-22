<script>
import { ref } from "vue";

import { Swiper, SwiperSlide } from "swiper/vue";
import { EffectFade } from "swiper/modules";
import { Thumbs } from "swiper/modules";

import "swiper/css";
import "swiper/css/effect-fade";

const thumbsSwiper = ref({});

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const thumbsSwiper = ref(null);
        const setThumbsSwiper = (swiper) => {
            thumbsSwiper.value = swiper;
        };
        const onSwiper = (swiper) => {};
        const onSlideChange = () => {};
        return {
            onSwiper,
            onSlideChange,
            thumbsSwiper,
            setThumbsSwiper,
            modules: [Thumbs, EffectFade],
        };
    },
};
</script>
<template>
    <div class="max-w-screen-xl mt-12 mb-20 mx-auto">
        <swiper
            :slides-per-view="1"
            :space-between="0"
            :modules="modules"
            effect="fade"
            :thumbs="{ swiper: thumbsSwiper }"
            @swiper="onSwiper"
            @slideChange="onSlideChange"
        >
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/e9b8b1/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/9e1883/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/45199c/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/379662/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/379662/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/379662/fff"
                    alt=""
            /></swiper-slide>
        </swiper>
        <swiper
            :slides-per-view="6"
            :space-between="4"
            :modules="modules"
            watch-slides-progress
            @swiper="setThumbsSwiper"
            @slideChange="onSlideChange"
        >
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/e9b8b1/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/9e1883/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/45199c/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/379662/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/379662/fff"
                    alt=""
            /></swiper-slide>
            <swiper-slide>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 hover:bg-opacity-30 div-opacity transition duration-500"
                ></div>
                <img
                    class="h-auto max-w-full ml-auto"
                    src="https://dummyimage.com/1500x660/379662/fff"
                    alt=""
            /></swiper-slide>
        </swiper>
    </div>
</template>
