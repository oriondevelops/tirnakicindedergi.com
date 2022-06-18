<template>
    <Head title="iletişim"/>
    <div class="relative bg-white">
        <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50" />
        </div>
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
            <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                <div class="max-w-lg mx-auto">
                    <h2 class="text-xl font-extrabold tracking-tight text-gray-900 sm:text-2xl">bizimle iletişime geçin</h2>
                    <dl class="mt-8 text-base text-gray-500">
                        <div class="mt-3">
                            <dt class="sr-only">Email</dt>
                            <dd class="flex">
                                <MailIcon class="flex-shrink-0 h-6 w-6 text-gray-400" aria-hidden="true" />
                                <span class="ml-3">iletisim@tirnakicindedergi.com</span>
                            </dd>
                        </div>
                    </dl>
                    <p class="mt-6 text-base text-gray-500">
                        <a href="#" class="font-medium text-gray-700 underline">İçerik göndermek mi istiyorsunuz?</a>
                    </p>
                </div>
            </div>
            <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                <div class="max-w-lg mx-auto lg:max-w-none">
                    <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="full-name" class="sr-only">ad - soyad</label>
                            <input type="text" name="full-name" id="full-name" autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md" placeholder="ad - soyad" />
                        </div>
                        <div>
                            <label for="email" class="sr-only">e-posta</label>
                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md" placeholder="e-posta" />
                        </div>
                        <div>
                            <label for="phone" class="sr-only">konu</label>
                            <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md" placeholder="konu" />
                        </div>
                        <div>
                            <label for="message" class="sr-only">ileti</label>
                            <textarea id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border border-gray-300 rounded-md" placeholder="ileti" />
                        </div>
                        <div>
                            <button type="submit" class="inline-flex justify-center py-1.5 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {Head} from "@inertiajs/inertia-vue3";
import { MailIcon, PhoneIcon } from '@heroicons/vue/outline'
</script>

<style scoped>

</style>
