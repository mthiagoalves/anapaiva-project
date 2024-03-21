<template>
    <div id="contact"
        class="h-96 max-w-screen-xl border-t-2 border-gray-300 mx-auto flex flex-wrap items-center justify-center p-6"
    >
        <div class="w-full h-full sm:h-auto flex sm:flex-row flex-col items-center justify-between">
            <a
                :href="route('homepage')"
                class="flex items-center space-x-3 rtl:space-x-reverse"
            >
                <img src="/imgs/logo.svg" class="h-12" alt="Flowbite Logo" />
                <img
                    src="/imgs/logo-name.svg"
                    class="h-12"
                    alt="Flowbite Logo"
                />
            </a>
            <div class="email-phone text-center sm:text-start">
                <a href="mailto:anapaivadecor@gmail.com"
                    >anapaivadecor@gmail.com</a
                >
                <p>+351 910000000</p>
            </div>
            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                <p>Follow us:</p>
                <div class="div-follow">
                    <a href="">
                        <img
                            src="/imgs/icons/insta-white.png"
                            alt=""
                            class="icon-insta"
                        />
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.email-phone {
    color: #000;
    font-size: 1.25rem;
    font-style: normal;
    font-weight: 400;
    letter-spacing: 0.25px;
}

.div-follow {
    background-color: var(--color-standard);
    border-radius: 25px;
}

.icon-insta {
    max-width: 1.5rem;
    background-color: var(--color-standard);
    margin: 5px;
}
</style>
