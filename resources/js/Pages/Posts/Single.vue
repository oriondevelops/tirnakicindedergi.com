<template>
    <article class="prose m-auto max-w-3xl">
        <div>
            <h2 class="mt-3 mb-0 text-3xl font-extrabold text-primary-500/75 border-b-8 border-primary-200 hover:text-primary-400/75 hover:tracking-widest duration-1000 cursor-pointer sm:text-4xl">{{ post.title }}</h2>
            <div class="flex inline-flex space-x-4 my-0 text-sm">
                <p v-if="publish_date" class="hover:text-gray-500 cursor-pointer">📅 {{ publish_date }}</p>
                <p v-if="post.author" class="hover:text-gray-500 cursor-pointer">🖊️ {{ post.author.name }}</p>
            </div>
            <p v-if="post.excerpt" class="text-xl text-gray-500">{{ post.excerpt }}</p>
        </div>
        <div class="text-justify leading-loose" v-html="content">
        </div>
    </article>
</template>

<script setup>
defineProps({
    post: Object,
    content: String,
    publish_date: String,
})
</script>

<style scoped>

</style>
