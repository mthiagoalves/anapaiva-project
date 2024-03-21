<template>
    <div class="grid gap-4">
        <div
            class="min-h-screen max-w-full background-banner relative flex items-center justify-center"
        >
            <div
                class="absolute lg:w-6/12 w-11/12 lg:h-72 h-60 rounded-2xl bg-white bg-opacity-75 flex items-center justify-center"
            >
                <h1 class="title-banner">Your taste, our project</h1>
                <a href=""
                    class="absolute -bottom-3 bg-white w-[265px] h-11 text-center flex items-center justify-center rounded-lg cta-see-more"
                    >See more</a
                >
            </div>
        </div>
    </div>
</template>

<style scoped>
.background-banner {
    background-image: url("https://dummyimage.com/1920x700/e9b8b1/fff");
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
</style>
