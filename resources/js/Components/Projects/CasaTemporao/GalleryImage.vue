<template>
    <div class="max-w-screen-xl mt-12 mb-20 mx-auto">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <FsLightbox :toggler="toggler" :slide="slide" :sources="[
                '/imgs/projects/casa-temporao/zoom/banner-01.png',
                '/imgs/projects/casa-temporao/zoom/banner-02.png',
                '/imgs/projects/casa-temporao/zoom/banner-03.png',
                '/imgs/projects/casa-temporao/zoom/banner-04.png',
                '/imgs/projects/casa-temporao/zoom/banner-05.png',
                '/imgs/projects/casa-temporao/zoom/banner-06.png',
                '/imgs/projects/casa-temporao/zoom/banner-07.png',
                '/imgs/projects/casa-temporao/zoom/banner-08.png',
                '/imgs/projects/casa-temporao/zoom/banner-09.png',
                '/imgs/projects/casa-temporao/zoom/banner-10.png',
                '/imgs/projects/casa-temporao/zoom/banner-11.png',
                '/imgs/projects/casa-temporao/zoom/banner-12.png',
                '/imgs/projects/casa-temporao/zoom/banner-13.png',
                '/imgs/projects/casa-temporao/zoom/banner-14.png',
                '/imgs/projects/casa-temporao/zoom/banner-15.png',
                '/imgs/projects/casa-temporao/zoom/banner-16.png',
                '/imgs/projects/casa-temporao/zoom/banner-17.png',
                '/imgs/projects/casa-temporao/zoom/banner-18.png',
            ]" />

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-4 md:gap-6 xl:gap-3 xl:mt-3 md:mt-6 mt-4">
                <!-- Primeira imagem -->
                <a @click="openLightboxOnSlide(1)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-01.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105" />
                </a>
                <!-- Segunda imagem -->
                <a @click="openLightboxOnSlide(2)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-02.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-02-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>

                <!-- Terceira imagem -->
                <a @click="openLightboxOnSlide(3)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-03.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105" />
                </a>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:gap-3 xl:mt-3 md:mt-6 mt-4">
                <!-- Quinta imagem -->
                <a @click="openLightboxOnSlide(4)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-04.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-04-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>
                <!-- Sexta imagem -->
                <a @click="openLightboxOnSlide(5)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-05.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-05-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-4 md:gap-6 xl:gap-3 xl:mt-3 md:mt-6 mt-4">
                <!-- Primeira imagem -->
                <a @click="openLightboxOnSlide(6)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-06.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105" />
                </a>
                <!-- Segunda imagem -->
                <a @click="openLightboxOnSlide(7)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-07.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-07-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>

                <!-- Terceira imagem -->
                <a @click="openLightboxOnSlide(8)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-08.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105" />
                </a>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:gap-3 xl:mt-3 md:mt-6 mt-4">
                <!-- Quinta imagem -->
                <a @click="openLightboxOnSlide(9)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-09.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-09-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>
                <!-- Sexta imagem -->
                <a @click="openLightboxOnSlide(10)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-10.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-10-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-4 md:gap-6 xl:gap-3 xl:mt-3 md:mt-6 mt-4">
                <!-- Primeira imagem -->
                <a @click="openLightboxOnSlide(11)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-11.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105" />
                </a>
                <!-- Segunda imagem -->
                <a @click="openLightboxOnSlide(12)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-12.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-12-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>

                <!-- Terceira imagem -->
                <a @click="openLightboxOnSlide(13)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-13.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105" />
                </a>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:gap-3 xl:mt-3 md:mt-6 mt-4">
                <!-- Quinta imagem -->
                <a @click="openLightboxOnSlide(14)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-14.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-14-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>
                <!-- Sexta imagem -->
                <a @click="openLightboxOnSlide(15)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-15.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-15-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-4 md:gap-6 xl:gap-3 xl:mt-3 md:mt-6 mt-4">
                <!-- Primeira imagem -->
                <a @click="openLightboxOnSlide(16)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-16.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105" />
                </a>
                <!-- Segunda imagem -->
                <a @click="openLightboxOnSlide(17)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-17.png" loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block" />
                    <img src="/imgs/projects/casa-temporao/banner-17-m.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden" />
                </a>

                <!-- Terceira imagem -->
                <a @click="openLightboxOnSlide(18)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="/imgs/projects/casa-temporao/banner-18.png" loading="lazy" alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105" />
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import FsLightbox from "fslightbox-vue/v3";

export default {
    components: { FsLightbox },
    data() {
        return {
            toggler: false,
            slide: 1,
        };
    },
    methods: {
        openLightboxOnSlide: function (number) {
            this.slide = number;
            this.toggler = !this.toggler;
        },
    },
};
</script>
