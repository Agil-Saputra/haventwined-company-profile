<script setup>
import Button from "./Button.vue";
import useFetch from "@/Composables/useFetch.js";
const { data: hero } = useFetch("/api/admin/heroes");
</script>

<template>
    <div v-if="hero && hero.length" class="grid gap-3 py-12">
        <div class="flex flex-col gap-2 text-center items-center">
			<h1 class="text-[3rem] md:text-[4rem] font-extrabold leading-tight">
				{{hero[0].title}}
			</h1>
			<h2 class="text-[1rem] md:text-[1.5rem] font-normal">
				{{hero[0].description}}
			</h2>
			<div class="mt-12">
				<Button>Start For Free</Button>
			</div>
		</div>
    </div>
</template>
