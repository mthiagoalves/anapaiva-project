<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";
import { EffectFade } from "swiper/modules";
import { Pagination } from "swiper/modules";

// Import Swiper styles
import "swiper/css";
import "swiper/css/effect-fade";
import "swiper/css/pagination";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log("slide change");
        };
        return {
            onSwiper,
            onSlideChange,
            modules: [Pagination, EffectFade],
        };
    },
};
</script>

<template>
    <swiper class="relative" :slides-per-view="1" :space-between="0" :modules="modules" :pagination="{
        dynamicBullets: false,
    }" effect="fade" @swiper="onSwiper" @slideChange="onSlideChange">
        <swiper-slide class="background-banner-1 min-h-screen max-w-full"></swiper-slide>
        <swiper-slide class="background-banner-2 min-h-screen max-w-full"></swiper-slide>
        <swiper-slide class="background-banner-3 min-h-screen max-w-full"></swiper-slide>
        <swiper-slide class="background-banner-4 min-h-screen max-w-full"></swiper-slide>
        <div
            class="min-h-screen w-full flex items-center justify-center absolute z-10 top-0 left-0 pointer-events-none">
            <div
                class="absolute lg:w-6/12 w-11/12 lg:h-72 h-60 rounded-2xl bg-white bg-opacity-75 flex items-center justify-center pointer-events-auto">
                <h1 class="title-banner">Your taste, our project</h1>
                <a :href="route('projects')"
                    class="absolute -bottom-3 bg-white w-[265px] h-11 text-center flex items-center justify-center rounded-lg cta-see-more">See
                    more</a>
            </div>
        </div>
    </swiper>
</template>

<style scoped>
.background-banner-1 {
    background-image: url("/imgs/homepage/banner-01.png");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.background-banner-2 {
    background-image: url("/imgs/homepage/banner-02.png");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.background-banner-3 {
    background-image: url("/imgs/homepage/banner-03.png");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.background-banner-4 {
    background-image: url("/imgs/homepage/banner-04.png");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.title-banner {
    color: #000;
    text-align: center;
    font-family: "Aurelie";
    font-size: 6.25rem;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    user-select: none;
}

.cta-see-more {
    color: #000;
    text-align: center;
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

@media (max-width: 756px) {
    .background-banner-1 {
        background-image: url("/imgs/homepage/banner-01.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .background-banner-2 {
        background-image: url("/imgs/homepage/banner-02-m.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .background-banner-3 {
        background-image: url("/imgs/homepage/banner-03-m.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .background-banner-4 {
        background-image: url("/imgs/homepage/banner-04-m.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .title-banner {
        font-size: 4rem;
    }

    .cta-see-more {
        font-size: 1.125rem;
    }
}
</style>
