<script setup>
import Header from '@/Components/Header'
</script>

<template>
    <div class="max-w-5xl mx-auto sm:px-6 sm:py-4 lg:px-8 lg:py-6">
        <div class="min-h-screen bg-primary-500 sm:bg-white rounded-none md:rounded-md lg:rounded-lg">
            <div class="p-0 sm:p-4 md:p-6">
                <img src="/media/banner.png" width="940" height="198" alt=""
                     class="border-t-8 border-secondary hidden sm:flex"
                     sizes="(max-width: 940px) 100vw, 940px"/>
                <Header></Header>
            </div>
            <div class="mx-auto my-8 p-3 sm:p-4 md:p-6">
                <slot></slot>
            </div>
        </div>
    </div>
</template>
