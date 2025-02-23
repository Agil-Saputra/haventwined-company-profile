<script setup>
// If you are using PurgeCSS, make sure to whitelist the carousel CSS classes
import 'vue3-carousel/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import useFetch from "@/Composables/useFetch.js"

const carouselConfig = {
  itemsToShow: 1,
  wrapAround: true,
  autoplay : 2000,
}

const { data: banners } = useFetch("/api/admin/banners");

</script>

<template>
	<div v-if="banners && banners.length" class="shadow-lg">
	  <Carousel v-bind="carouselConfig">
		<Slide v-for="(banner) in banners" :key="banner.id">
		  <img :src="banner.image" :alt="banner.title" class="w-full md:h-[29rem] h-[15rem] rounded-md object-cover" />
		</Slide>
  
		<template #addons>
		  <Navigation />
		  <Pagination />
		</template>
	  </Carousel>
	</div>
  </template>