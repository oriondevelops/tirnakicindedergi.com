<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
import Gallery from "@/Pages/Gallery/Index.vue";
import Announcement from '@/Pages/Home/Partials/Announcement.vue'
import LatestPosts from '@/Pages/Home/Partials/LatestPosts.vue'
import {ChevronDoubleRightIcon} from '@heroicons/vue/outline'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    posts: Object,
})

const media = [
    {
        title: null,
        description: null,
        author: 'Sevgi Tüccar',
        source: '/media/gallery/sevgi_tuccar-11.webp',
        width: '666',
        height: '451',
    },
    {
        title: null,
        description: null,
        author: 'Neslihan Dalga',
        source: '/media/gallery/neslihan_dalga-9.webp',
        width: '1024',
        height: '1024',
    },
    {
        title: null,
        description: null,
        author: 'Şeyma Diş',
        source: '/media/gallery/seyma_dis-8.webp',
        width: '3024',
        height: '4032',
    },
    {
        title: 'His',
        description: null,
        author: 'Rumeysa Alarçın',
        source: '/media/gallery/rumeysa_alarcin-his.webp',
        width: '3120',
        height: '3177',
    },
]

</script>

<template>
    <Head title="kültür, sanat ve edebiyat"/>

    <!--<Announcement/>-->

    <!-- Posts -->
    <div class="pt-4 pb-4 lg:pb-6">
        <div class="relative mx-auto divide-y-2 divide-gray-200">
            <div class="sm:flex sm:items-center sm:justify-between">
                <h2 class="text-lg tracking-tight font-extrabold text-gray-900 sm:text-xl">Son Yazılar</h2>
                <div class="mt-3 sm:mt-0 sm:ml-4 group">
                    <Link :href="route('posts')">
                        <button type="button"
                                class="inline-flex items-center px-2 py-0.5 border-primary-400 border-primary-300 border-b-4 border-transparent rounded-md text-sm font-medium text-primary-500 group-hover:text-primary-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Tümünü gör
                            <chevron-double-right-icon
                                class="w-5 h-5 ml-2 px-0.5 py-0.5 text-primary-500 group-hover:text-primary-400"></chevron-double-right-icon>
                        </button>
                    </Link>
                </div>
            </div>
            <LatestPosts :posts="posts"/>
        </div>
    </div>

    <!-- Media Section -->
    <div class="pt-8 pb-4 lg:pb-6">
        <div class="relative mx-auto divide-y-2 divide-gray-200">
            <div class="sm:flex sm:items-center sm:justify-between">
                <h2 class="text-lg tracking-tight font-extrabold text-gray-900 sm:text-xl">Çizimler ve Fotoğraflar</h2>
                <div class="mt-3 sm:mt-0 sm:ml-4 group">
                    <Link :href="route('gallery')">
                        <button type="button"
                                class="inline-flex items-center px-2 py-0.5 border-primary-400 group-hover:border-primary-300 border-b-4 rounded-md border-transparent text-sm font-medium text-primary-500 group-hover:text-primary-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Tümünü gör
                            <chevron-double-right-icon
                                class="w-5 h-5 ml-2 px-0.5 py-0.5 text-primary-500 group-hover:text-primary-400"></chevron-double-right-icon>
                        </button>
                    </Link>
                </div>
            </div>
            <div class="pt-4 mt-6">
                <Gallery :media="media"/>
            </div>
        </div>
    </div>
</template>
