<template>
    <!--
    TODO If announcement is closed do not show it again
    Match given announcement id with local id and delete old local data
    If ids are matching show if it is not closed before
    If not matching delete old data and show banner

    IDEA can be an slider later
    -->
    <transition
        enter-active-class="transition duration-100 ease-out"
        enter-from-class="transform scale-95 opacity-0"
        enter-to-class="transform scale-100 opacity-100"
        leave-active-class="transition duration-[366ms] ease-in"
        leave-from-class="transform scale-100 opacity-100"
        leave-to-class="transform scale-95 opacity-0"
    >
        <div v-if="isOpen" class="group bg-primary-400 group-hover:bg-sky-500 rounded-md my-2 text-base sm:text-sm">
            <div class="mx-auto py-3 px-4 sm:py-1 sm:px-3 lg:px-2.5">
                <div class="flex items-center justify-between flex-wrap">
                    <div class="w-0 flex-1 flex items-center">
          <span class="flex p-2 rounded-lg bg-secondary">
            <SpeakerphoneIcon class="h-5 w-5 text-white" aria-hidden="true"/>
          </span>
                        <p class="ml-3 font-medium text-white truncate">
                            <span class="md:hidden"> Yeni sayımız çıktı! </span>
                            <span class="hidden md:inline"> Müjde! Yeni sayımız yayınlandı. </span>
                        </p>
                    </div>
                    <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                        <Link :href="route('volumes')"
                           class="sm:group-hover:scale-105 flex items-center justify-center px-4 py-2 sm:py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-primary-600 bg-white hover:bg-gray-100">
                            Sayıya git </Link>
                    </div>
                    <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                        <button type="button"
                                @click="isOpen = false"
                                class="-mr-1 flex p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white sm:-mr-1.5">
                            <span class="sr-only">Kapat</span>
                            <XIcon class="h-6 w-6 text-white" aria-hidden="true"/>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script setup>
import {SpeakerphoneIcon, XIcon} from '@heroicons/vue/outline'
import {ref} from "vue";

const isOpen = ref(true);
</script>

<style scoped>

</style>
