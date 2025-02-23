<script setup>
import useFetch from "@/Composables/useFetch.js";
const { data: benefits } = useFetch("/api/admin/benefits");
</script>

<template>
    <div v-if="benefits && benefits.length" class="flex flex-col md:flex-row gap-3 py-12 items-center">
        <div v-for="benefit in benefits"
            class="flex gap-3 rounded-lg border border-[#ddd0e7] bg-[#faf8fc] px-4 py-4 md:py-10 flex-col w-full items-center text-center"
			:key="benefit.id"
        >
            <img :src="`/${benefit.icon}`" :alt="benefit.title" class="w-10 h-10">
            <div class="flex flex-col gap-1">
                <h2 class="text-base md:text-2xl font-bold leading-tight">
                  {{benefit.title}}
                </h2>
                <p
                    class="text-purple-600 text-sm font-normal md:text-lg leading-normal max-w-[50ch]"
                >
                    {{benefit.description}}
                </p>
            </div>
        </div>
    </div>
</template>
