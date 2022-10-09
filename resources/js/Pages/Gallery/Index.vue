<template>
    <Head title="çizimler ve fotoğraflar"/>
    <div id="gallery" class="mt-4 pswp-gallery pswp-gallery--single-column">
        <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            <a v-for="medium in media" :key="medium.source"
               :data-pswp-width="medium.width"
               :data-pswp-height="medium.height"
               :data-pswp-src="medium.source">
                <li class="relative">
                    <div
                        class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-primary-500 overflow-hidden">
                        <img :src="medium.source" :alt="medium.description"
                             class="object-cover pointer-events-none group-hover:opacity-75"/>
                        <button type="button" class="absolute inset-0 focus:outline-none">
                            <span class="sr-only">Detayları Görüntüle: {{ medium.title }}</span>
                        </button>
                        <div class="pswp-caption-content" v-html="medium.description"></div>
                    </div>
                    <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
                        {{ medium.title }}
                    </p>
                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">{{ medium.author }}</p>
                </li>
            </a>
        </ul>
    </div>
</template>

<script setup>
import PhotoSwipeLightbox from 'photoswipe/lightbox';
import PhotoSwipeDynamicCaption from 'photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.esm.js';
import 'photoswipe/style.css';
import 'photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.css';
import {onMounted, onUnmounted} from "vue";
import {Head} from "@inertiajs/inertia-vue3";

defineProps({
    media: Object,
})

const lightbox = new PhotoSwipeLightbox({
    gallery: '#gallery',
    children: 'a',
    bgOpacity: 0.7,
    pswpModule: () => import('photoswipe'),
});

const captionPlugin = new PhotoSwipeDynamicCaption(lightbox, {
    // Plugins options, for example:
    type: 'auto',
});

onMounted(() => {
    lightbox.init();
})

onUnmounted(() => {
    lightbox.destroy();
})

</script>

<style scoped>
.pswp--custom-bg {
    --pswp-bg: #846F59;
}
</style>
