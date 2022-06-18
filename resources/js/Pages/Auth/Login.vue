<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Master.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';
import { LockClosedIcon } from '@heroicons/vue/solid'

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Giriş Yap"/>

        <div class="hidden">

            <BreezeValidationErrors class="mb-4"/>

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <form @submit.prevent="submit">
                <div>
                    <BreezeLabel for="email" value="Email"/>
                    <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                                 autofocus autocomplete="username"/>
                </div>

                <div class="mt-4">
                    <BreezeLabel for="password" value="Password"/>
                    <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password"
                                 required autocomplete="current-password"/>
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <BreezeCheckbox name="remember" v-model:checked="form.remember"/>
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Link v-if="canResetPassword" :href="route('password.request')"
                          class="underline text-sm text-gray-600 hover:text-gray-900">
                        Şifremi Unuttum
                    </Link>

                    <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Giriş Yap
                    </BreezeButton>
                </div>
            </form>

        </div>

        <div class="min-h-full flex items-center justify-center py-0 px-0 sm:px-2 lg:px-4">
            <div class="max-w-md w-full space-y-8">
                <div>
<!--                    <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-primary-600.svg" alt="Workflow" />-->
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign in to your account</h2>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        Or
                        {{ ' ' }}
                        <a href="#" class="font-medium text-primary-600 hover:text-primary-500"> start your 14-day free trial </a>
                    </p>
                </div>
                <form class="mt-8 space-y-6" action="#" method="POST">
                    <input type="hidden" name="remember" value="true" />
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="email" type="email" autocomplete="email" required="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Email address" />
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="Password" />
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded" />
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Remember me </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-primary-600 hover:text-primary-500"> Forgot your password? </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <LockClosedIcon class="h-5 w-5 text-white group-hover:text-primary-900" aria-hidden="true" />
            </span>
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </BreezeGuestLayout>
</template>
