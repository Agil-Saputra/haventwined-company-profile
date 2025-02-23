<script setup>
import useFetch from "@/Composables/useFetch.js";
const { data: about} = useFetch("/api/admin/abouts");
</script>

<template>
    <div v-if="about && about.length">
		<h1 class="text-3xl md:text-4xl font-black leading-tight mb-4">
			{{ about[0].title }}
		</h1>
		<p class="text-[1rem] md:text-[1.3rem] font-normal">
			{{about[0].description}}
		</p>
    </div>
</template>
