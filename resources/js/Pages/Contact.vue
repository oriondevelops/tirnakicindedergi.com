<template>
    <Head title="iletişim"/>
    <div class="relative bg-white">
        <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"/>
        </div>
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
            <div
                class="bg-[url('/media/iletisim-sevgi_tuccar.webp')] hover:scale-95 duration-[4444ms] bg-cover bg-left-bottom sm:bg-center lg:bg-left-bottom py-12 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                <div class="max-w-lg mx-auto p-2 pt-14 py-14 bg-gray-100/50 rounded-lg">
                    <h2 class="text-xl font-extrabold tracking-tight text-gray-900 sm:text-2xl">Bizimle iletişime
                        geçin</h2>
                    <p class="mt-3 text-lg leading-6 text-gray-600">İletişim formumuzu veya mail adresimizi
                        kullanarak
                        bizimle iletişime geçebilirsiniz.</p>
                    <dl class="mt-8 text-base text-gray-700">
                        <div class="mt-3">
                            <dt class="sr-only">Email</dt>
                            <dd class="flex">
                                <MailIcon class="flex-shrink-0 h-6 w-6 text-gray-500" aria-hidden="true"/>
                                <span class="ml-3">iletisim@tirnakicindedergi.com</span>
                            </dd>
                        </div>
                    </dl>
                    <p class="mt-6 text-base text-gray-500">
                        <button @click="triggerSubmitContent" class="font-medium text-gray-700 hover:text-gray-600 underline">İçerik göndermek mi
                            istiyorsunuz?</button>
                    </p>
                </div>
            </div>
            <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                <div class="max-w-lg mx-auto lg:max-w-none">
                    <form @submit.prevent="submit" class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="name" class="sr-only">ad - soyad</label>
                            <input v-model="form.name" type="text" name="name" id="name" autocomplete="name"
                                   class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md"
                                   placeholder="ad - soyad" required/>
                            <small v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</small>
                        </div>
                        <div>
                            <label for="email" class="sr-only">e-posta</label>
                            <input v-model="form.email" id="email" name="email" type="email" autocomplete="email"
                                   class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md"
                                   placeholder="e-posta" required/>
                            <small v-if="form.errors.email" class="text-red-500">{{ form.errors.email }}</small>
                        </div>
                        <div>
                            <label for="subject" class="sr-only">konu</label>
                            <input v-model="form.subject" type="text" name="subject" id="subject"
                                   class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md"
                                   placeholder="konu" required/>
                            <small v-if="form.errors.subject" class="text-red-500">{{ form.errors.subject }}</small>
                        </div>
                        <div>
                            <label for="message" class="sr-only">ileti</label>
                            <textarea v-model="form.message" id="message" name="message" rows="4"
                                      class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border border-gray-300 rounded-md"
                                      placeholder="ileti" required/>
                            <small v-if="form.errors.message" class="text-red-500">{{ form.errors.message }}</small>
                        </div>
                        <div>
                            <button type="submit" :disabled="form.processing"
                                    class="inline-flex justify-center py-1.5 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-primary-400 hover:bg-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <svg v-if="form.processing" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                            stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span v-if="!form.processing">gönder</span>
                                <span v-if="form.processing">gönderiliyor...</span>
                            </button>
                        </div>
                        <BasicNotification v-if="form.wasSuccessful">İletinizi aldık. Teşekkür ederiz.</BasicNotification>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {Head, useForm} from "@inertiajs/inertia-vue3";
import {MailIcon} from '@heroicons/vue/outline'
import {ref} from 'vue'
import BasicNotification from '@/Components/BasicNotification'

const form = useForm({
    name: null,
    email: null,
    subject: null,
    message: null,
})

function submit() {
    form.post(route('contact.post'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    })
}

function triggerSubmitContent() {
    const elem = document.getElementById('submitContentButton');
    elem.click();
}
</script>
