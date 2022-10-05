<template>
    <Head title="sayılar"/>
    <ul role="list" class="my-4 grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8">
        <li v-for="file in files" :key="file.source" class="relative">
            <a target="_self" :href="file.href">
                <div
                    class="group block w-full aspect-w-3 aspect-h-4 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-primary-500 overflow-hidden">
                    <img :src="file.source" alt="" class="p-2 object-fill pointer-events-none group-hover:opacity-75"/>
                    <button type="button" class="absolute inset-0 focus:outline-none">
                        <span class="sr-only">View details for {{ file.title }}</span>
                    </button>
                </div>
                <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                    {{ file.title }}</p>
                <p class="block text-sm font-medium text-gray-500 pointer-events-none">{{ file.date }}</p>
            </a></li>
    </ul>
</template>

<script setup>
import {Head} from "@inertiajs/inertia-vue3";

const files = [
    {
        title: 'tırnak içinde 1. sayı',
        date: 'haziran 2019',
        href: '/volume/1/index.html',
        source: '/volume/1/files/mobile/1.jpg',
    },
    {
        title: 'tırnak içinde 2. sayı',
        date: 'eylül 2020',
        href: '/volume/2/index.html',
        source: '/volume/2/files/mobile/1.jpg',
    },
    {
        title: 'tırnak içinde 3. sayı',
        date: 'aralık 2021',
        href: '/volume/3/index.html',
        source: '/volume/3/files/mobile/1.jpg',
    },
]
</script>

<style scoped>

</style>
