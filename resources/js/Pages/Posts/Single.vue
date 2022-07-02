<template>
    <Head :title="post.title"/>
    <div class="min-h-full flex">
        <div class="flex flex-col w-0 flex-1">
            <main class="flex-1">
                <div class="py-2 xl:pt-6 xl:pb-2">
                    <div class="max-w-4xl mx-auto px-0.5 sm:px-1 lg:px-1 xl:max-w-5xl xl:grid xl:grid-cols-3">
                        <div class="xl:col-span-2 xl:pr-8 xl:border-r xl:border-gray-200">
                            <div>
                                <div>
                                    <div
                                        class="md:flex md:items-center md:justify-between md:space-x-4 xl:border-b xl:pb-6">
                                        <div>
                                            <h1 class="text-4xl font-bold text-gray-900">{{ post.title }}</h1>
                                            <!--<p class="mt-2 text-sm text-gray-500">
                                                #400 opened by
                                                {{ ' ' }}
                                                <a href="#" class="font-medium text-gray-900">Hilary Mahy</a>
                                                {{ ' ' }}
                                                in
                                                {{ ' ' }}
                                                <a href="#" class="font-medium text-gray-900">Customer Portal</a>
                                            </p>-->
                                        </div>

                                    </div>
                                    <aside class="mt-8 mb-4 xl:hidden">
                                        <h2 class="sr-only">Details</h2>
                                        <div class="space-y-5">
                                            <div v-if="publish_date" class="flex items-center space-x-2" title="Yayınlanma Tarihi">
                                                <CalendarIcon class="h-5 w-5 text-gray-400" aria-hidden="true"/>
                                                <span class="text-gray-900 text-sm font-medium"><time
                                                    datetime="2020-12-02">{{ publish_date }}</time></span>
                                            </div>
                                            <div v-if="content" class="flex items-center space-x-2 content-center items-center self-center" title="Okuma Süresi">
                                                <ClockIcon class="h-5 w-5 text-gray-400" aria-hidden="true"/>
                                                <span class="text-gray-900 text-sm font-medium">{{
                                                        readingTime(content)
                                                    }} dakika</span>
                                            </div>
                                        </div>
                                        <div v-if="post.author" class="mt-6 border-t border-b border-gray-200 py-6 space-y-8">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-500">Yazar</h2>
                                                <ul role="list" class="mt-3 space-y-3">
                                                    <li class="flex justify-start">
                                                        <a href="#" class="flex items-center space-x-3">
                                                            <div class="flex-shrink-0">
                                                                <img class="h-5 w-5 rounded-full"
                                                                     :src="post.author.avatar"
                                                                     alt=""/>
                                                            </div>
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ post.author.name }}
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div v-if="/*post.tags.length*/false">
                                                <h2 class="text-sm font-medium text-gray-500">Tags</h2>
                                                <ul role="list" class="mt-2 leading-8">
                                                    <li class="inline">
                                                        <a href="#"
                                                           class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                                            <div
                                                                class="absolute flex-shrink-0 flex items-center justify-center">
                                                                <span class="h-1.5 w-1.5 rounded-full bg-rose-500"
                                                                      aria-hidden="true"/>
                                                            </div>
                                                            <div class="ml-3.5 text-sm font-medium text-gray-900">Bug
                                                            </div>
                                                        </a>
                                                        {{ ' ' }}
                                                    </li>
                                                    <li class="inline">
                                                        <a href="#"
                                                           class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                                            <div
                                                                class="absolute flex-shrink-0 flex items-center justify-center">
                                                                <span class="h-1.5 w-1.5 rounded-full bg-indigo-500"
                                                                      aria-hidden="true"/>
                                                            </div>
                                                            <div class="ml-3.5 text-sm font-medium text-gray-900">
                                                                Accessibility
                                                            </div>
                                                        </a>
                                                        {{ ' ' }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                    <div class="py-3 xl:pt-6 xl:pb-0">
                                        <h2 class="sr-only">Yazı</h2>
                                        <div class="prose max-w-none text-justify" v-html="content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <aside class="sticky top-10 h-1 hidden xl:block xl:pl-8">
                            <h2 class="sr-only">Details</h2>
                            <div class="space-y-5">
                                <div v-if="content" class="flex items-center space-x-2" title="Okuma Süresi">
                                    <ClockIcon class="h-5 w-5 text-gray-400" aria-hidden="true"/>
                                    <span class="text-gray-900 text-sm font-medium">{{
                                            readingTime(content)
                                        }} dakika</span>
                                </div>
                                <div v-if="publish_date" class="flex items-center space-x-2" title="Yayınlanma Tarihi">
                                    <CalendarIcon class="h-5 w-5 text-gray-400" aria-hidden="true"/>
                                    <span class="text-gray-900 text-sm font-medium"><time
                                        datetime="2020-12-02">{{ publish_date }}</time></span>
                                </div>
                            </div>
                            <div v-if="post.author" class="mt-6 border-t border-gray-200 py-6 space-y-8">
                                <div>
                                    <h2 class="text-sm font-medium text-gray-500">Yazar</h2>
                                    <ul role="list" class="mt-3 space-y-3">
                                        <li class="flex justify-start">
                                            <a href="#" class="flex items-center space-x-3">
                                                <div class="flex-shrink-0">
                                                    <img class="h-5 w-5 rounded-full"
                                                         :src="post.author.avatar"
                                                         alt=""/>
                                                </div>
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ post.author.name }}
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div v-if="/*post.tags.length*/false">
                                    <h2 class="text-sm font-medium text-gray-500">Etiketler</h2>
                                    <ul role="list" class="mt-2 leading-8">
                                        <li v-for="tag in post.tags" class="inline">
                                            <a href="#"
                                               class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                                <div class="absolute flex-shrink-0 flex items-center justify-center">
                                                    <span class="h-1.5 w-1.5 rounded-full bg-rose-500"
                                                          aria-hidden="true"/>
                                                </div>
                                                <div class="ml-3.5 text-sm font-medium text-gray-900">{{ tag.name }}
                                                </div>
                                            </a>
                                            {{ ' ' }}
                                        </li>
                                    </ul>
                                </div>
                                <!--<div class="float-right hidden md:flex items-center">
                                    <button type="button"
                                            class="inline-flex items-center px-2 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-400 hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                        <ArrowsExpandIcon class="h-5 w-5" aria-hidden="true"/>
                                    </button>
                                </div>-->
                            </div>
                        </aside>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<script setup>
import {Head} from "@inertiajs/inertia-vue3";
import {PencilIcon} from '@heroicons/vue/outline'
import {ref} from 'vue'
import {Dialog, DialogOverlay, TransitionChild, TransitionRoot} from '@headlessui/vue'
import {
    ArchiveIcon,
    HomeIcon,
    MenuAlt2Icon,
    UserCircleIcon as UserCircleIconOutline,
    ViewListIcon,
    XIcon,
} from '@heroicons/vue/outline'
import {
    ClockIcon,
    CalendarIcon,
    ChatAltIcon,
    CheckCircleIcon,
    LockOpenIcon,
    SearchIcon,
    ArrowsExpandIcon,
    TagIcon,
    UserCircleIcon as UserCircleIconSolid,
} from '@heroicons/vue/solid'

const navigation = [
    {name: 'All Issues', href: '#', icon: HomeIcon, current: true},
    {name: 'My Issues', href: '#', icon: ViewListIcon, current: false},
    {name: 'Assigned', href: '#', icon: UserCircleIconOutline, current: false},
    {name: 'Closed', href: '#', icon: ArchiveIcon, current: false},
    {name: 'Recent', href: '#', icon: ClockIcon, current: false},
]
const projects = [
    {id: 1, name: 'GraphQL API', href: '#'},
    {id: 2, name: 'iOS App', href: '#'},
    {id: 3, name: 'Marketing Site Redesign', href: '#'},
    {id: 4, name: 'Customer Portal', href: '#'},
]
const activity = [
    {
        id: 1,
        type: 'comment',
        person: {name: 'Eduardo Benz', href: '#'},
        imageUrl:
            'https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80',
        comment:
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis sed purus nam. ',
        date: '6d ago',
    },
    {
        id: 2,
        type: 'assignment',
        person: {name: 'Hilary Mahy', href: '#'},
        assigned: {name: 'Kristin Watson', href: '#'},
        date: '2d ago',
    },
    {
        id: 3,
        type: 'tags',
        person: {name: 'Hilary Mahy', href: '#'},
        tags: [
            {name: 'Bug', href: '#', color: 'bg-rose-500'},
            {name: 'Accessibility', href: '#', color: 'bg-indigo-500'},
        ],
        date: '6h ago',
    },
    {
        id: 4,
        type: 'comment',
        person: {name: 'Jason Meyers', href: '#'},
        imageUrl:
            'https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80',
        comment:
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis sed purus nam. Scelerisque amet elit non sit ut tincidunt condimentum. Nisl ultrices eu venenatis diam.',
        date: '2h ago',
    },
]

defineProps({
    post: Object,
    content: String,
    publish_date: String,
})


function readingTime(text) {
    const wpm = 225
    const words = text.trim().split(/\s+/).length
    return Math.ceil(words / wpm)
}
</script>

<style scoped>

</style>
