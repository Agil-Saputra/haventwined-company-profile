<template>
    <a
        v-bind="$attrs"
        class="flex  cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-8 py-6  bg-purple-500 text-[#faf8fc] text-xl font-bold leading-normal tracking-[0.015em] "
    >
        <slot />
    </a>
</template>
