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
    <div class="grid sm:grid-cols-2 grid-cols-1 gap-0 max-w-full pt-24 mx-auto mb-20">
        <div class="order-2 sm:order-1">
            <swiper :slides-per-view="1" :space-between="0" :modules="modules" :pagination="{
                dynamicBullets: false,
            }" effect="fade" @swiper="onSwiper" @slideChange="onSlideChange">
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-1"
                        @mouseover="addHoverClassSwiper($event, '1')" @mouseleave="removeHoverClassSwiper($event, '1')" >
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/379662/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-1"
                        @mouseover="addHoverClassSwiper($event, '1')" @mouseleave="removeHoverClassSwiper($event, '1')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/9e1883/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-1"
                        @mouseover="addHoverClassSwiper($event, '1')" @mouseleave="removeHoverClassSwiper($event, '1')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/45199c/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-1"
                        @mouseover="addHoverClassSwiper($event, '1')" @mouseleave="removeHoverClassSwiper($event, '1')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/e9b8b1/fff" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-1 sm:order-2 relative">
            <a :href="route('campo-pequeno')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Campo Pequeno</h3>
                <p class="sub-title-card-projects">Apartment</p>
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
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/9e1883/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-2"
                        @mouseover="addHoverClassSwiper($event, '2')" @mouseleave="removeHoverClassSwiper($event, '1')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/e9b8b1/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-2"
                        @mouseover="addHoverClassSwiper($event, '2')" @mouseleave="removeHoverClassSwiper($event, '1')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/45199c/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-2"
                        @mouseover="addHoverClassSwiper($event, '2')" @mouseleave="removeHoverClassSwiper($event, '1')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/379662/fff" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-3 sm:order-3">
            <a :href="route('braganca')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Braganca</h3>
                <p class="sub-title-card-projects">Apartment</p>
                <span class="years-project mb-6">2022</span>
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
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/e9b8b1/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-3"
                        @mouseover="addHoverClassSwiper($event, '3')" @mouseleave="removeHoverClassSwiper($event, '3')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/9e1883/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-3"
                        @mouseover="addHoverClassSwiper($event, '3')" @mouseleave="removeHoverClassSwiper($event, '3')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/45199c/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-3"
                        @mouseover="addHoverClassSwiper($event, '3')" @mouseleave="removeHoverClassSwiper($event, '3')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/379662/fff" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-5 sm:order-6 relative">
            <a :href="route('parque-das-nacoes')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Parque das Nacoes</h3>
                <p class="sub-title-card-projects">Apartment</p>
                <span class="years-project mb-6">2022</span>
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
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/45199c/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-4"
                        @mouseover="addHoverClassSwiper($event, '4')" @mouseleave="removeHoverClassSwiper($event, '4')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/e9b8b1/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-4"
                        @mouseover="addHoverClassSwiper($event, '4')" @mouseleave="removeHoverClassSwiper($event, '4')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/9e1883/fff" alt="" />
                </swiper-slide>
                <swiper-slide>
                    <div
                        class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-slide-4"
                        @mouseover="addHoverClassSwiper($event, '4')" @mouseleave="removeHoverClassSwiper($event, '4')">
                    </div>
                    <img class="h-auto max-w-full ml-auto" src="https://dummyimage.com/1100x1000/379662/fff" alt="" />
                </swiper-slide>
            </swiper>
        </div>
        <div class="flex justify-center flex-col order-7 sm:order-7">
            <a :href="route('holiday')"
                class="sm:m-24 my-24 mx-12 sm:h-full border border-gray-950 rounded-lg flex items-center justify-center flex-col relative">
                <h3 class="titles-aurelie">Holiday</h3>
                <p class="sub-title-card-projects">Apartment</p>
                <span class="years-project mb-6">2021</span>
                <div
                    class="absolute min-h-full min-w-full bg-black bg-opacity-0 div-opacity transition duration-500 hover-card-4"
                    @mouseover="addHoverClassCard($event, '4')" @mouseleave="removeHoverClassCard($event, '4')">
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
