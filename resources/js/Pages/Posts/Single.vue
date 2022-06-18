<template>
    <article class="prose max-w-3xl">
        <div>
            <h2 class="my-3 text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">{{ post.title }}</h2>
            <p class="text-xl text-gray-500">{{ post.excerpt }}</p>
        </div>
        <div class="text-justify leading-loose" v-html="content">
        </div>
    </article>
</template>

<script setup>
defineProps({
    post: Object,
    content: String,
    published_at: Object,
})
</script>

<style scoped>

</style>
