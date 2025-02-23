<script setup>
import useFetch from "@/Composables/useFetch.js";
const { data: contacts } = useFetch("/api/admin/contacts");
</script>

<template>
    <div v-if="contacts && contacts.length" class="flex gap-6 items-center flex-col md:flex-row mt-6">
        <div v-for="contact in contacts"
            class="rounded-lg cursor-pointer border border-[#ddd0e7] bg-[#faf8fc] flex-col w-full p-2 text-center "
			:key="contact.id"
        >
           <a :href="contact.link" class="flex flex-col items-center">
			<img :src="contact.icon" :alt="contact.platform" class="w-20 h-20">
            <div class="flex flex-col gap-1">
                <h2 class="text-base md:text-2xl font-bold leading-tight">
                  {{contact.platform}}
                </h2>
            </div>
		   </a>
        </div>
    </div>
</template>
