<template>
    <li :class=childClass class='flex'>
        <a
            target="_blank"
            :href=href
            class="group flex text-sm font-medium text-zinc-800 transition hover:text-primary-500 hover:font-semibold"
        >
            <Component :is="icon" class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-primary-500"/>
            <span class="ml-4 mt-1">
            <slot></slot>
            </span>
        </a>
    </li>
</template>

<script setup>
defineProps({
    childClass: String,
    href: String,
    icon: Object
})
</script>

<style scoped>

</style>
