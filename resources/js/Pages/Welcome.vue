<script setup>
import { Head } from "@inertiajs/vue3";
import Banners from "@/Components/Banners.vue";
import Benefits from "@/Components/Benefits.vue";
import About from "@/Components/About.vue";
import Hero from "@/Components/Hero.vue";
import Contacts from "@/Components/Contacts.vue";
import Button from "@/Components/Button.vue";
</script>

<template>
    <Head title="HaventWined" />
    <div
        class="bg-gradient-to-br from-purple-500 to-white via-purple-100 md:px-24 px-10 pb-24"
    >
        <header
            class="flex items-center justify-between whitespace-nowrap py-6"
        >
            <div class="w-full h-fit">
                <img
                    src="/assets/haventwined.png"
                    class="w-56 h-12 object-contain"
                    alt="haven twined logo"
                />
            </div>
            <div
                class="flex items-center gap-2 md:gap-6 md:scale-100 scale-75 origin-right"
            >
                <Button>Login</Button>
                <a href="/" class="text-xl">Register</a>
            </div>
        </header>

        <!-- Hero -->
        <div class="md:py-52 py-24 w-full">
            <Hero />
        </div>

        <!-- Banner -->
        <div class="pb-24 md:pb-48">
            <Banners />
        </div>

        <!-- About Us -->
        <div class="text-left">
            <About />
        </div>

        <!--Why Choose Us -->
        <div class="md:py-48 py-24">
            <div class="flex flex-col gap-4 text-center">
                <h1 class="text-[2rem] md:text-[3rem] font-bold leading-tight">
                    Why choose Haventwined?
                </h1>
                <p
                    class="md:text-[1.5rem] text-[1rem] font-normal leading-normal"
                >
                    We're more than just a ticketing platform. We're your
                    partner in creating unforgettable experiences.
                </p>
            </div>

            <Benefits />
        </div>

        <!-- Contacts -->
        <div class="flex flex-col pb-6 gap-4 text-center">
            <div class="flex flex-col gap-4 text-center">
                <h1 class="text-[2rem] md:text-[3rem] font-bold leading-tight">
                    Contact Us
                </h1>
                <p
                    class="md:text-[1.5rem] text-[1rem] font-normal leading-normal"
                >
                    Ready to host your first event on Haventwined? Our team is
                    here to help you every step of the way.
                </p>
            </div>

            <Contacts />
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-purple-500 text-white py-10 px-6">
        <div class="flex flex-col md:flex-row justify-between gap-8 md:mx-24px mx-10 items-center">
            <!-- Left Section -->
            <div>
                <img
                    src="/assets/haventwined.png"
                    alt="Haventwined Logo"
                    class="w-56"
                />
            </div>

            <!-- Right Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-24">
                <div>
                    <h3 class="text-lg font-semibold">Explore Event</h3>
                    <ul class="mt-2 space-y-2">
                        <li>Festival - Fair - Bazaar</li>
                        <li>Exhibition - Expo - Pameran</li>
                        <li>Pensi - Acara Sekolah - Acara Kampus</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold">Support</h3>
                    <ul class="mt-2 space-y-2">
                        <li>FAQ</li>
                        <li>Privacy Policy</li>
                        <li>Terms and Condition</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="mt-8 text-center border-t border-gray-400 pt-4">
            <span class="text-sm">&copy; 2024 Haventwined</span>
        </div>
    </footer>
</template>
