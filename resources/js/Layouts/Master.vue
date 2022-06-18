<script setup>
import Header from '@/Layouts/Partials/Header'
import Footer from '@/Layouts/Partials/Footer'
</script>

<template>
    <!-- <Header></Header>-->
    <div class="max-w-5xl mx-auto px-4 sm:px-6 sm:py-4 lg:px-8 lg:py-6">
        <div class="min-h-screen bg-white rounded-md md:rounded lg:rounded-lg">
            <div class="p-0 md:p-6">
                <img src="/media/banner.png" width="940" height="198" alt=""
                     class="border-t-8 border-secondary hidden md:flex"
                     sizes="(max-width: 940px) 100vw, 940px"/>
                <Header></Header>
            </div>
            <div class="mx-auto p-3 sm:p-3 md:p-6 md:pt-0">
                <slot></slot>
            </div>
            <div class="md:p-6">
                <Footer />
            </div>
        </div>
    </div>
</template>
