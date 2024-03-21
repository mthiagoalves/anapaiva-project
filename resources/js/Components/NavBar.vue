<script setup>
import NavLink from "@/Components/NavLink.vue";
</script>
<template>
    <nav class="bg-white bg-opacity-90 fixed w-full z-10 h-24">
        <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6"
        >
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
            <button
                data-collapse-toggle="navbar-default"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default"
                aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 17 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                    />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0"
                >
                    <li>
                        <NavLink
                            :href="route('about')"
                            :active="route().current('about')"
                        >
                            About
                        </NavLink>
                    </li>
                    <li>
                        <NavLink
                            :href="route('projects')"
                            :active="route().current('projects')"
                        >
                            Projects
                        </NavLink>
                    </li>
                    <li>
                        <NavLink
                            :href="route('360')"
                            :active="route().current('360')"
                        >
                            360°
                        </NavLink>
                    </li>
                    <li>
                        <a href="#contact" class="text-nav"> Contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
