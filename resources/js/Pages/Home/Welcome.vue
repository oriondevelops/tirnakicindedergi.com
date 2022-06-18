<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
import Gallery from "@/Pages/Home/Partials/Gallery";
import Announcement from '@/Pages/Home/Partials/Announcement'
import LatestPosts from '@/Pages/Home/Partials/LatestPosts'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    posts: Object,
})


</script>

<template>
    <Head title="kültür, sanat ve edebiyat"/>

    <Announcement/>

    <!-- Posts -->
    <div class="pt-4 pb-4 lg:pb-6">
        <div class="relative mx-auto divide-y-2 divide-gray-200">
            <div>
                <h2 class="text-lg tracking-tight font-extrabold text-gray-900 sm:text-xl">Son Yazılar</h2>
                <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
                    <p class="text-md text-gray-500">Yeni yayınlanan yazılarımızdan haberdar olmak için e-posta
                        bültenimize abone olabilirsiniz.</p>
                    <form class="mt-6 flex flex-col sm:flex-row lg:mt-0 lg:justify-end">
                        <div>
                            <label for="email-address" class="sr-only">E-posta Adresi</label>
                            <input id="email-address" name="email-address" type="email" autocomplete="email" required=""
                                   class="appearance-none w-full px-4 py-2 border border-gray-300 text-sm rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:ring-primary-500 focus:border-primary-500 lg:max-w-xs"
                                   placeholder="E-postanızı giriniz"/>
                        </div>
                        <div
                            class="mt-2 flex-shrink-0 w-full flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto sm:inline-flex">
                            <button type="button"
                                    class="w-full bg-primary-400 px-4 py-0.5 border border-transparent rounded-md flex items-center justify-center text-sm font-medium text-white hover:bg-primary-500 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 sm:w-auto sm:inline-flex">
                                Abone Ol
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <LatestPosts :posts="posts"/>
        </div>
    </div>

    <!-- Media Section -->
    <!--<Gallery /> -->

    <!-- Reader Content -->
    <!--<div class="relative mx-auto divide-y-2 divide-gray-200">
        <div>
            <h2 class="text-xl tracking-tight font-extrabold text-gray-900 sm:text-2xl">Okurlarımızdan Gelenler</h2>
            <p class="mt-3 text-md text-gray-500 sm:mt-4">Okurlarımızın tırnak içinde paylaştığı dergimizin çalışma kapsamında içerikler</p>
        </div>
        <div class="mt-12 mb-8 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-10">
            <div v-for="post in posts" :key="post.title">
                <div>
                    <a :href="post.category.href" class="inline-block">
              <span :class="[post.category.color, 'inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium']">
                {{ post.category.name }}
              </span>
                    </a>
                </div>
                <a :href="post.href" class="block mt-4">
                    <p class="text-lg font-semibold text-gray-900">
                        {{ post.title }}
                    </p>
                    <p class="mt-3 text-md text-gray-500">
                        {{ post.description }}
                    </p>
                </a>
                <div class="mt-6 flex items-center">
                    <div class="flex-shrink-0">
                        <a :href="post.author.href">
                            <span class="sr-only">{{ post.author.name }}</span>
                            <img class="h-10 w-10 rounded-full" :src="post.author.imageUrl" alt="" />
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                            <a :href="post.author.href">
                                {{ post.author.name }}
                            </a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500">
                            <time :datetime="post.datetime">
                                {{ post.date }}
                            </time>
                            <span aria-hidden="true"> &middot; </span>
                            <span> {{ post.readingTime }} read </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</template>
