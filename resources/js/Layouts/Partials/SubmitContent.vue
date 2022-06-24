<template>
    <div class="flex-shrink-0" title="İçerik Gönder">
        <button type="button" @click="open = true"
                title="İçerik Gönder"
                class="relative inline-flex items-center px-2 py-1 my-0 sm:my-0 sm:py-1 lg:px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-primary-500">
            <MailIcon class="-ml-1 -mr-1 sm:mr-2 h-5 w-5" aria-hidden="true"/>
            <span class="lowercase hidden sm:flex">İçerik Gönder</span>
        </button>
    </div>
    <TransitionRoot as="template" :show="open">
        <Dialog as="div" class="fixed inset-0 overflow-hidden" @close="open = false">
            <div class="absolute inset-0 overflow-hidden">
                <DialogOverlay class="absolute inset-0"/>

                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                    <TransitionChild as="template" enter="transform transition ease-in-out duration-500 sm:duration-700"
                                     enter-from="translate-x-full" enter-to="translate-x-0"
                                     leave="transform transition ease-in-out duration-500 sm:duration-700"
                                     leave-from="translate-x-0" leave-to="translate-x-full">
                        <div class="pointer-events-auto w-screen max-w-md">
                            <form @submit.prevent="submit" class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl">
                                <div class="h-0 flex-1 overflow-y-auto">
                                    <div class="bg-primary-500 py-6 px-4 sm:px-6">
                                        <div class="flex items-center justify-between">
                                            <DialogTitle class="text-lg font-medium text-white"> Yeni İçerik
                                            </DialogTitle>
                                            <div class="ml-3 flex h-7 items-center">
                                                <button type="button"
                                                        class="rounded-md bg-primary-700 text-primary-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                                        @click="open = false">
                                                    <span class="sr-only">paneli kapat</span>
                                                    <XIcon class="h-6 w-6" aria-hidden="true"/>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-sm text-primary-300">Aşağıdaki bilgileri doldurarak bize
                                                içerik gönderebilirsiniz.</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="divide-y divide-gray-200 px-4 sm:px-6">
                                            <div class="space-y-6 pt-6 pb-5">
                                                <div>
                                                    <label for="name" class="block text-sm font-medium text-gray-900">ad
                                                        - soyad</label>
                                                    <div class="mt-1">
                                                        <input v-model="form.name" type="text" name="name" id="name"
                                                               autocomplete="name"
                                                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm"
                                                               required />
                                                    </div>
                                                    <small v-if="form.errors.name"
                                                           class="text-red-500">{{ form.errors.name }}</small>
                                                </div>
                                                <div>
                                                    <label for="email" class="block text-sm font-medium text-gray-900">e-posta</label>
                                                    <div class="mt-1">
                                                        <input v-model="form.email" id="email" name="email" type="email"
                                                               autocomplete="email"
                                                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm"
                                                               required />
                                                    </div>
                                                    <small v-if="form.errors.email"
                                                           class="text-red-500">{{ form.errors.email }}</small>
                                                </div>
                                                <div>
                                                    <label for="subject"
                                                           class="block text-sm font-medium text-gray-900">başlık</label>
                                                    <div class="mt-1">
                                                        <input v-model="form.subject" type="text" name="subject"
                                                               id="subject"
                                                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm"
                                                               required />
                                                    </div>
                                                    <small v-if="form.errors.subject"
                                                           class="text-red-500">{{ form.errors.subject }}</small>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label for="description"
                                                               class="block text-sm font-medium text-gray-900">açıklama</label>
                                                        <span class="text-xs text-gray-500" id="description-optional">opsiyonel</span>
                                                    </div>
                                                    <div class="mt-1">
                                                        <textarea v-model="form.description" id="description"
                                                                  name="description" rows="4"
                                                                  class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm"/>
                                                    </div>
                                                    <small v-if="form.errors.description"
                                                           class="text-red-500">{{ form.errors.description }}</small>
                                                </div>
                                                <Combobox as="div" v-model="form.category">
                                                    <ComboboxLabel class="block text-sm font-medium text-gray-700">
                                                        kategori
                                                    </ComboboxLabel>
                                                    <div class="relative mt-1">
                                                        <ComboboxInput
                                                            class="w-full rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 shadow-sm focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 sm:text-sm"
                                                            v-model="form.category"
                                                            @change="query = $event.target.value"
                                                            :display-value="(category) => category.name"/>
                                                        <ComboboxButton
                                                            class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none">
                                                            <SelectorIcon class="h-5 w-5 text-gray-400"
                                                                          aria-hidden="true"/>
                                                        </ComboboxButton>

                                                        <ComboboxOptions v-if="filteredCategories.length > 0"
                                                                         class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                                            <ComboboxOption v-for="category in filteredCategories"
                                                                            :key="category.id" :value="category"
                                                                            as="template" v-slot="{ active, selected }">
                                                                <li :class="['relative cursor-default select-none py-2 pl-8 pr-4', active ? 'bg-primary-600 text-white' : 'text-gray-900']">
                                                                <span
                                                                    :class="['block truncate', selected && 'font-semibold']">
                                                                    {{ category.name }}
                                                                </span>

                                                                    <span v-if="selected"
                                                                          :class="['absolute inset-y-0 left-0 flex items-center pl-1.5', active ? 'text-white' : 'text-primary-600']">
                                                                <CheckIcon class="h-5 w-5" aria-hidden="true"/>
                                                                     </span>
                                                                </li>
                                                            </ComboboxOption>
                                                        </ComboboxOptions>
                                                    </div>
                                                    <small v-if="form.errors.category"
                                                           class="text-red-500">{{ form.errors.category }}</small>
                                                </Combobox>
                                                <div
                                                    class="sm:grid sm:grid-cols-2 sm:gap-4 sm:items-start">
                                                    <label for="file" class="block text-sm font-medium text-gray-900">
                                                        dosya </label>
                                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                        <div
                                                            class="max-w-lg w-full flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                            <div v-if="!form.file" class="space-y-1 text-center">
                                                                <svg class="mx-auto h-12 w-12 text-gray-400"
                                                                     stroke="currentColor" fill="none"
                                                                     viewBox="0 0 48 48" aria-hidden="true">
                                                                    <path
                                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"/>
                                                                </svg>
                                                                <div class="flex text-sm text-gray-600 mx-auto px-auto">
                                                                    <label for="file"
                                                                           class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                                        <span>Bir dosya yükleyin</span>
                                                                        <input
                                                                            @input="form.file = $event.target.files[0]"
                                                                            id="file" name="file" type="file"
                                                                            class="sr-only" required/>
                                                                    </label>
                                                                </div>
                                                                <p class="text-xs text-gray-500">DOCX, PNG, JPG en fazla
                                                                    10MB</p>
                                                            </div>
                                                            <div v-if="form.file" class="w-full overflow-hidden">
                                                                <div
                                                                    class="flex items-center justify-between flex-wrap">
                                                                    <div class="text-left h-7 items-center"
                                                                         title="dosyayı kaldır">
                                                                        <button type="button"
                                                                                class="rounded-md text-primary-200 hover:text-primary-300 focus:outline-none focus:ring-2 focus:ring-white"
                                                                                @click="form.file = null">
                                                                            <span class="sr-only">dosyayı kaldır</span>
                                                                            <XIcon class="h-6 w-6" aria-hidden="true"/>
                                                                        </button>
                                                                    </div>
                                                                    <div class="mx-auto my-auto">
                                                                        <h2 class="text-lg font-medium text-gray-900">
                                                                            <span class="sr-only">Details for </span>{{
                                                                                form.file.name
                                                                            }}</h2>
                                                                        <p class="text-sm font-medium text-gray-500">
                                                                            {{ formatBytes(form.file.size) }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <progress v-if="form.progress"
                                                                  :value="form.progress.percentage"
                                                                  class="rounded-lg"
                                                                  max="100">
                                                            {{ form.progress.percentage }}%
                                                        </progress>
                                                        <small v-if="form.errors.file"
                                                               class="text-red-500">{{ form.errors.file }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-shrink-0 justify-end px-4 py-4">
                                    <button type="button"
                                            class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"
                                            @click="open = false">geri dön
                                    </button>
                                    <button type="submit"
                                            class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-primary-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                        gönder
                                    </button>
                                </div>
                            </form>
                        </div>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import {ref, computed, onMounted} from 'vue'
import {Dialog, DialogOverlay, DialogTitle, TransitionChild, TransitionRoot} from '@headlessui/vue'
import {MailIcon, XIcon} from '@heroicons/vue/outline'
import {LinkIcon, CheckIcon, SelectorIcon, QuestionMarkCircleIcon} from '@heroicons/vue/solid'
import {useForm, usePage} from "@inertiajs/inertia-vue3";
import {
    Combobox,
    ComboboxButton,
    ComboboxInput,
    ComboboxLabel,
    ComboboxOption,
    ComboboxOptions,
} from '@headlessui/vue'

const open = ref(false)

const form = useForm({
    name: null,
    email: null,
    subject: null,
    description: null,
    category: ref(),
    file: null,
})


const query = ref('')
const filteredCategories = computed(() =>
    query.value === ''
        ? categories
        : categories.filter((category) => {
            form.category = category
            return category.name.toLowerCase().includes(query.value.toLowerCase())
        })
)

const categories = [
    {id: 1, name: 'öykü'},
    {id: 2, name: 'şiir'},
    {id: 3, name: 'deneme'},
    {id: 4, name: 'tarih'},
    {id: 5, name: 'felsefe'},
    {id: 6, name: 'sinema'},
    {id: 7, name: 'sanat'},
    {id: 8, name: 'fotoğraf'},
    {id: 9, name: 'çizim'},
    {id: 10, name: 'diğer'},
    {id: 11, name: 'sinema'},
]

function submit() {
    form.post(route('content.post'), {
        preserveScroll: true,
        //onSuccess: () => form.reset(),
    })
}

function formatBytes(bytes, decimals = 2) {
    if (bytes === 0) return '0 Bytes';

    const k = 1024;
    const dm = decimals < 0 ? 0 : decimals;
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

    const i = Math.floor(Math.log(bytes) / Math.log(k));

    return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}
</script>

<style scoped>

</style>
