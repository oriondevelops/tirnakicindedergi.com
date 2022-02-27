<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})


</script>

<template>
    <Head title="Hoş geldiniz"/>
    <div class="prose text-primary">
        <h1>Test</h1>
        <p>For Tailwind CSS v3.0, the CSS-based CDN build we’ve offered in the past has been replaced by the new
            Play CDN, which gives you the full power of the new engine right in the browser with no build step.</p>
    </div>
</template>
