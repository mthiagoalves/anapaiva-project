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
    methods: {
        addHoverClassSwiper(event, cardClass) {
            event.target.classList.add('hover:bg-opacity-30');
            const divCard = document.querySelector('.hover-card-' + cardClass);
            if (divCard) {
                divCard.classList.remove('bg-opacity-0');
                divCard.classList.add('bg-opacity-5');
            }
        },
        removeHoverClassSwiper(event, cardClass) {
            event.target.classList.remove('hover:bg-opacity-30');
            const divCard = document.querySelector('.hover-card-' + cardClass);
            if (divCard) {
                divCard.classList.remove('bg-opacity-5');
                divCard.classList.add('bg-opacity-0');
            }
        },
        addHoverClassCard(event, slideClass) {
            event.target.classList.add('hover:bg-opacity-5');
            const divSlides = document.querySelectorAll('.hover-slide-' + slideClass);
            console.log(divSlides);
            divSlides.forEach(divSlide => {
                divSlide.classList.remove('opacity-0', 'hover:opacity-100');
                divSlide.classList.add('bg-opacity-30');
            });

        },
        removeHoverClassCard(event, slideClass) {
            event.target.classList.remove('hover:bg-opacity-5');
            const divSlides = document.querySelectorAll('.hover-slide-' + slideClass);
            divSlides.forEach(divSlide => {
                divSlide.classList.remove('bg-opacity-30');
                divSlide.classList.add('opacity-0', 'hover:opacity-100');
            });
        }
    }
};
</script>
<template>
    <div class="grid sm:grid-cols-2 grid-cols-1 gap-0 max-w-full pt-24 mx-auto">
        <div class="order-2 sm:order-1">
            <swiper :slides-per-view="1" :space-between="0" :modules="modules" :pagination="{
                dynamicBullets: false,
            }" effect="fade" @swiper="onSwiper" @slideChange="onSlideChange">
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-1"
                        @mouseover="addHoverClassSwiper($event, '1')" @mouseleave="removeHoverClassSwiper($event, '1')" >
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/geres/thumbnails/thumbnail-01.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-1"
                        @mouseover="addHoverClassSwiper($event, '1')" @mouseleave="removeHoverClassSwiper($event, '1')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/geres/thumbnails/thumbnail-02.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-1"
                        @mouseover="addHoverClassSwiper($event, '1')" @mouseleave="removeHoverClassSwiper($event, '1')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/geres/thumbnails/thumbnail-03.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-1"
                        @mouseover="addHoverClassSwiper($event, '1')" @mouseleave="removeHoverClassSwiper($event, '1')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/geres/thumbnails/thumbnail-04.png" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-1 sm:order-2 relative">
            <a :href="route('geres')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Geres</h3>
                <p class="sub-title-card-projects">House</p>
                <span class="years-project mb-6">2023</span>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-card-1"
                    @mouseover="addHoverClassCard($event, '1')" @mouseleave="removeHoverClassCard($event, '1')">
                </div>
            </a>
        </div>
        <div class="order-4 sm:order-4">
            <swiper :slides-per-view="1" :space-between="0" :modules="modules" :pagination="{
                dynamicBullets: false,
            }" effect="fade" @swiper="onSwiper" @slideChange="onSlideChange">
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-2"
                        @mouseover="addHoverClassSwiper($event, '2')" @mouseleave="removeHoverClassSwiper($event, '2')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/guimaraes/thumbnails/thumbnail-01.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-2"
                        @mouseover="addHoverClassSwiper($event, '2')" @mouseleave="removeHoverClassSwiper($event, '2')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/guimaraes/thumbnails/thumbnail-02.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-2"
                        @mouseover="addHoverClassSwiper($event, '2')" @mouseleave="removeHoverClassSwiper($event, '2')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/guimaraes/thumbnails/thumbnail-03.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-2"
                        @mouseover="addHoverClassSwiper($event, '2')" @mouseleave="removeHoverClassSwiper($event, '2')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/guimaraes/thumbnails/thumbnail-04.png" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-3 sm:order-3">
            <a :href="route('guimaraes-heritage-residence')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Guimaraes </h3>
                <p class="sub-title-card-projects">Apartment</p>
                <span class="years-project mb-6">2023</span>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-card-2"
                    @mouseover="addHoverClassCard($event, '2')" @mouseleave="removeHoverClassCard($event, '2')">
                </div>
            </a>
        </div>
        <div class="order-6 sm:order-5">
            <swiper :slides-per-view="1" :space-between="0" :modules="modules" :pagination="{
                dynamicBullets: false,
            }" effect="fade" @swiper="onSwiper" @slideChange="onSlideChange">
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-3"
                        @mouseover="addHoverClassSwiper($event, '3')" @mouseleave="removeHoverClassSwiper($event, '3')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/escritorios/thumbnails/thumbnail-01.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-3"
                        @mouseover="addHoverClassSwiper($event, '3')" @mouseleave="removeHoverClassSwiper($event, '3')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/escritorios/thumbnails/thumbnail-02.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-3"
                        @mouseover="addHoverClassSwiper($event, '3')" @mouseleave="removeHoverClassSwiper($event, '3')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/escritorios/thumbnails/thumbnail-03.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-3"
                        @mouseover="addHoverClassSwiper($event, '3')" @mouseleave="removeHoverClassSwiper($event, '3')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/escritorios/thumbnails/thumbnail-04.png" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-5 sm:order-6 relative">
            <a :href="route('office-project')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Offices</h3>
                <p class="sub-title-card-projects">Office</p>
                <span class="years-project mb-6">2021</span>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-card-3"
                    @mouseover="addHoverClassCard($event, '3')" @mouseleave="removeHoverClassCard($event, '3')">
                </div>
            </a>
        </div>
        <div class="order-8 sm:order-8">
            <swiper :slides-per-view="1" :space-between="0" :modules="modules" :pagination="{
                dynamicBullets: false,
            }" effect="fade" @swiper="onSwiper" @slideChange="onSlideChange">
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-4"
                        @mouseover="addHoverClassSwiper($event, '4')" @mouseleave="removeHoverClassSwiper($event, '4')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/santa-fe/thumbnails/thumbnail-01.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-4"
                        @mouseover="addHoverClassSwiper($event, '4')" @mouseleave="removeHoverClassSwiper($event, '4')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/santa-fe/thumbnails/thumbnail-02.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-4"
                        @mouseover="addHoverClassSwiper($event, '4')" @mouseleave="removeHoverClassSwiper($event, '4')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/santa-fe/thumbnails/thumbnail-03.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-4"
                        @mouseover="addHoverClassSwiper($event, '4')" @mouseleave="removeHoverClassSwiper($event, '4')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/santa-fe/thumbnails/thumbnail-04.png" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-7 sm:order-7">
            <a :href="route('santa-fe-luxury-villa')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Santa Fe</h3>
                <p class="sub-title-card-projects">Villa</p>
                <span class="years-project mb-6">2021</span>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-card-4"
                    @mouseover="addHoverClassCard($event, '4')" @mouseleave="removeHoverClassCard($event, '4')">
                </div>
            </a>
        </div>

    </div>
    <div class="grid sm:grid-cols-2 grid-cols-1 gap-0 max-w-full mx-auto mb-20">
        <div class="flex justify-center flex-col order-1 sm:order-2">
            <a :href="route('timeless-temporao-house')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Timeless Temporao</h3>
                <p class="sub-title-card-projects">House</p>
                <span class="years-project mb-6">2021</span>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-card-5"
                    @mouseover="addHoverClassCard($event, '5')" @mouseleave="removeHoverClassCard($event, '5')">
                </div>
            </a>
        </div>
        <div class="order-2 sm:order-1">
            <swiper :slides-per-view="1" :space-between="0" :modules="modules" :pagination="{
                dynamicBullets: false,
            }" effect="fade" @swiper="onSwiper" @slideChange="onSlideChange">
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-5"
                        @mouseover="addHoverClassSwiper($event, '5')" @mouseleave="removeHoverClassSwiper($event, '5')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/casa-temporao/thumbnails/thumbnail-01.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-5"
                        @mouseover="addHoverClassSwiper($event, '5')" @mouseleave="removeHoverClassSwiper($event, '5')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/casa-temporao/thumbnails/thumbnail-02.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-5"
                        @mouseover="addHoverClassSwiper($event, '5')" @mouseleave="removeHoverClassSwiper($event, '5')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/casa-temporao/thumbnails/thumbnail-03.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-5"
                        @mouseover="addHoverClassSwiper($event, '5')" @mouseleave="removeHoverClassSwiper($event, '5')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/casa-temporao/thumbnails/thumbnail-04.png" alt="" />
                </swiper-slide>
            </swiper>
        </div>

        <div class="order-4 sm:order-4">
            <swiper :slides-per-view="1" :space-between="0" :modules="modules" :pagination="{
                dynamicBullets: false,
            }" effect="fade" @swiper="onSwiper" @slideChange="onSlideChange">
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-6"
                        @mouseover="addHoverClassSwiper($event, '6')" @mouseleave="removeHoverClassSwiper($event, '6')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/brasil-apartment/thumbnails/thumbnail-01.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-6"
                        @mouseover="addHoverClassSwiper($event, '6')" @mouseleave="removeHoverClassSwiper($event, '6')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/brasil-apartment/thumbnails/thumbnail-02.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-6"
                        @mouseover="addHoverClassSwiper($event, '6')" @mouseleave="removeHoverClassSwiper($event, '6')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/brasil-apartment/thumbnails/thumbnail-03.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-6"
                        @mouseover="addHoverClassSwiper($event, '6')" @mouseleave="removeHoverClassSwiper($event, '6')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/brasil-apartment/thumbnails/thumbnail-04.png" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-3 sm:order-3">
            <a :href="route('modern-living')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Modern Living</h3>
                <p class="sub-title-card-projects">Apartment</p>
                <span class="years-project mb-6">2021</span>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-card-6"
                    @mouseover="addHoverClassCard($event, '6')" @mouseleave="removeHoverClassCard($event, '6')">
                </div>
            </a>
        </div>
        <div class="order-6 sm:order-5">
            <swiper :slides-per-view="1" :space-between="0" :modules="modules" :pagination="{
                dynamicBullets: false,
            }" effect="fade" @swiper="onSwiper" @slideChange="onSlideChange">
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-7"
                        @mouseover="addHoverClassSwiper($event, '7')" @mouseleave="removeHoverClassSwiper($event, '7')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/espinho-apartment/thumbnails/thumbnail-01.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-7"
                        @mouseover="addHoverClassSwiper($event, '7')" @mouseleave="removeHoverClassSwiper($event, '7')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/espinho-apartment/thumbnails/thumbnail-02.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-7"
                        @mouseover="addHoverClassSwiper($event, '7')" @mouseleave="removeHoverClassSwiper($event, '7')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/espinho-apartment/thumbnails/thumbnail-03.png" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-7"
                        @mouseover="addHoverClassSwiper($event, '7')" @mouseleave="removeHoverClassSwiper($event, '7')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="/imgs/projects/espinho-apartment/thumbnails/thumbnail-04.png" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-5 sm:order-6">
            <a :href="route('espinho-seaside-retreat')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Espinho Seaside</h3>
                <p class="sub-title-card-projects">Apartment</p>
                <span class="years-project mb-6">2021</span>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-card-7"
                    @mouseover="addHoverClassCard($event, '7')" @mouseleave="removeHoverClassCard($event, '7')">
                </div>
            </a>
        </div>
    </div>
</template>

<style scoped>
.sub-title-card-projects {
    color: #000;
    text-align: center;
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.years-project {
    color: #808080;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.div-opacity {
    z-index: 5;
}
</style>
