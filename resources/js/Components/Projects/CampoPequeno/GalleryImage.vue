<template>
    <div class="max-w-screen-xl mt-12 mb-20 mx-auto">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <FsLightbox
                :toggler="toggler"
                :slide="slide"
                :sources="[
                    'https://dummyimage.com/500x500/379662/fff',
                    'https://dummyimage.com/500x600/379662/fff',
                    'https://dummyimage.com/500x700/379662/fff',
                    'https://dummyimage.com/500x800/379662/fff',
                    'https://dummyimage.com/500x900/379662/fff',
                ]"
            />

            <div
                class="grid grid-cols-1 gap-4 sm:grid-cols-4 md:gap-6 xl:gap-3 xl:mt-3 md:mt-6 mt-4"
            >
                <!-- Primeira imagem -->
                <a
                    @click="openLightboxOnSlide(1)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80"
                >
                    <img
                        src="https://dummyimage.com/500x500/379662/fff"
                        loading="lazy"
                        alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105"
                    />
                </a>
                <!-- Segunda imagem -->
                <a
                    @click="openLightboxOnSlide(2)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:col-span-2 md:h-80"
                >
                    <img
                        src="https://dummyimage.com/700x400/379662/fff"
                        loading="lazy"
                        alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block"
                    />
                    <img
                        src="https://dummyimage.com/500x500/379662/fff"
                        loading="lazy"
                        alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden"
                    />
                </a>

                <!-- Terceira imagem -->
                <a
                    @click="openLightboxOnSlide(3)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80"
                >
                    <img
                        src="https://dummyimage.com/500x500/379662/fff"
                        loading="lazy"
                        alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105"
                    />
                </a>
            </div>
            <div
                class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:gap-3 xl:mt-3 md:mt-6 mt-4"
            >
                <!-- Quinta imagem -->
                <a
                    @click="openLightboxOnSlide(3)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80"
                >
                    <img
                        src="https://dummyimage.com/700x400/379662/fff"
                        loading="lazy"
                        alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block"
                    />
                    <img
                        src="https://dummyimage.com/500x500/379662/fff"
                        loading="lazy"
                        alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden"
                    />
                </a>
                <!-- Sexta imagem -->
                <a
                    @click="openLightboxOnSlide(4)"
                    class="group relative flex h-80 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80"
                >
                    <img
                        src="https://dummyimage.com/700x400/379662/fff"
                        loading="lazy"
                        alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 hidden sm:block"
                    />
                    <img
                        src="https://dummyimage.com/500x500/379662/fff"
                        loading="lazy"
                        alt="Photo by Martin Sanchez"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-105 block sm:hidden"
                    />
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import FsLightbox from "fslightbox-vue/v3";

export default {
    components: { FsLightbox },
    props: {
        lightboxSources: [
            "https://dummyimage.com/500x500/379662/fff",
            "https://dummyimage.com/500x600/379662/fff",
            "https://dummyimage.com/500x700/379662/fff",
            "https://dummyimage.com/500x800/379662/fff",
            "https://dummyimage.com/500x900/379662/fff",
        ],
    },
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
