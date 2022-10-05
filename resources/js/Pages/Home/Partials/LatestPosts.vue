<template>
    <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
        <div v-for="post in posts" :key="post.title"
             class="p-6 border-l-[2px] hover:border-r-2 border-primary-300 hover:bg-gray-50 hover:rounded-3xl duration-[222ms]">
            <header class="flex flex-col">
                <time
                    :dateTime="post.publish_date"
                    class="order-first flex items-center text-base text-zinc-400"
                >
                    <span class="h-4 w-0.5 rounded-full bg-zinc-200"/>
                    <span class="ml-3 text-sm">{{ post.publish_date }}</span>
                </time>
            </header>
            <Link :href="route('single', post.slug)" class="mt-2 block">
                <p class="text-lg font-semibold text-gray-900 capitalize">
                    {{ post.title }}
                </p>
                <p class="mt-3 text-md text-gray-500">
                    {{ post.excerpt }}
                </p>
                <div class="mt-3">
                    <div class="relative flex items-center text-sm font-medium text-primary-600 hover:text-primary-500">
                        Devamını oku
                        <ChevronRightIcon class="ml-1 h-3 w-3 stroke-current"/>
                    </div>
                </div>
            </Link>
        </div>
    </div>
</template>

<script setup>
import {ChevronRightIcon} from "@heroicons/vue/outline";

defineProps({
    posts: Object,
})
</script>

<style scoped>

</style>
