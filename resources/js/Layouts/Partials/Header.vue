<template>
    <Disclosure as="nav" class="bg-secondary rounded-t md:rounded-none" v-slot="{ open }">
        <div class="max-w-7xl mx-auto px-2 sm:px-4">
            <div class="flex justify-between h-12">
                <div class="flex">
                    <div class="-ml-1 mr-2 flex items-center md:hidden">
                        <!-- Mobile menu button -->
                        <DisclosureButton
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                            <span class="sr-only">Open main menu</span>
                            <MenuIcon v-if="!open" class="block h-6 w-6" aria-hidden="true"/>
                            <XIcon v-else class="block h-6 w-6" aria-hidden="true"/>
                        </DisclosureButton>
                    </div>
                    <div class="flex-shrink-0 flex items-center md:mr-6">
                        <Link :href="route('welcome')">
                            <img class="block lg:hidden h-7 w-auto" src="/media/logo.webp" alt="tırnak içinde dergi"/>
                            <img class="hidden lg:block h-7 w-auto" src="/media/logo.webp" alt="tırnak içinde dergi"/>
                        </Link>
                    </div>
                    <div class="hidden md:ml-0 md:flex md:items-center md:space-x-4">
                        <Link v-for="item in navigation" :key="item.name" :href="item.href"
                              :class="[item.current ? 'bg-primary-600 text-white' : 'text-gray-300 hover:bg-primary-500 hover:text-white', 'lowercase px-3 py-1 rounded-md text-sm font-medium']"
                              :aria-current="item.current ? 'page' : undefined">{{ item.name }}
                        </Link>
                    </div>
                </div>
                <div class="flex items-center">
                    <SubmitContent/>
                    <!--<div class="hidden md:ml-4 md:flex-shrink-0 md:flex md:items-center">
                        <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none">
                            <span class="sr-only">View notifications</span>
                            <BellIcon class="h-5 w-5" aria-hidden="true" />
                        </button>

                        &lt;!&ndash; Profile dropdown &ndash;&gt;
                        <Menu as="div" class="ml-3 relative">
                            <div>
                                <MenuButton class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-primary-500">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-7 w-7 rounded-full" :src="user.imageUrl" alt="" />
                                </MenuButton>
                            </div>
                            <transition enter-active-class="transition ease-out duration-200" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                                <MenuItems class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                    <MenuItem v-for="item in userNavigation" :key="item.name" v-slot="{ active }">
                                        <a :href="item.href" :class="[active ? 'bg-gray-100' : '', 'lowercase block px-4 py-2 text-sm text-gray-700']">{{ item.name }}</a>
                                    </MenuItem>
                                </MenuItems>
                            </transition>
                        </Menu>
                    </div>-->
                </div>
            </div>
        </div>

        <DisclosurePanel class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <DisclosureButton v-for="item in navigation" :key="item.name" as="a" :href="item.href"
                                  :class="[item.current ? 'bg-primary-500 text-white' : 'text-gray-300 hover:bg-gray-500/50 hover:text-white', 'lowercase block px-3 py-2 rounded-md text-sm font-medium']"
                                  :aria-current="item.current ? 'page' : undefined">{{ item.name }}
                </DisclosureButton>
            </div>
            <!--<div class="pt-4 pb-3 border-t border-gray-700">
                <div class="flex items-center px-5 sm:px-6">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" :src="user.imageUrl" alt="" />
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-white">{{ user.name }}</div>
                        <div class="text-sm font-medium text-gray-400">{{ user.email }}</div>
                    </div>
                    <button type="button" class="ml-auto flex-shrink-0 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-primary-500">
                        <span class="sr-only">Bildirimler</span>
                        <BellIcon class="h-6 w-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="mt-3 px-2 space-y-1 sm:px-3">
                    <DisclosureButton v-for="item in userNavigation" :key="item.name" as="a" :href="item.href" class="lowercase block px-3 py-2 rounded-md text-sm font-medium text-gray-400 hover:text-white hover:bg-primary-700">{{ item.name }}</DisclosureButton>
                </div>
            </div>-->
        </DisclosurePanel>
    </Disclosure>
</template>

<script setup>
import {Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems} from '@headlessui/vue'
import {BellIcon, MenuIcon, XIcon} from '@heroicons/vue/outline'
import {usePage} from "@inertiajs/inertia-vue3";
import {computed} from "vue";
import SubmitContent from './SubmitContent.vue';

const user = {
    name: 'Tom Cook',
    email: 'tom@example.com',
    imageUrl:
        'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
}
const navigation = computed(() => [
    {name: 'Anasayfa', href: '/', current: isUrl('')},
    {name: 'Sayılar', href: '/volumes', current: isUrl('volumes')},
    {name: 'Hakkımızda', href: '/about', current: isUrl('about')},
    {name: 'İletişim', href: '/contact', current: isUrl('contact')},
])

const userNavigation = [
    {name: 'Profil', href: '#'},
    {name: 'Ayarlar', href: '#'},
    {name: 'Çıkış Yap', href: '#'},
]

function isUrl(...urls) {
    let currentUrl = usePage().url.value.substring(1)
    if (urls[0] === '') {
        return currentUrl === ''
    }
    return urls.filter((url) => currentUrl.startsWith(url)).length
}
</script>

<style scoped>

</style>
