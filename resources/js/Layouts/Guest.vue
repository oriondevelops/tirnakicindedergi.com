<script setup>

</script>

<template>
    <div class="max-w-4xl mx-auto sm:px-6 sm:py-4 lg:px-8 lg:py-6">
        <div class="min-h-screen bg-white rounded-lg p-6">
            <img src="/media/banner.png" class="m-auto" width="940" height="198" alt="" sizes="(max-width: 940px) 100vw, 940px"/>
            <div class="mx-auto my-12">
                <slot/>
            </div>
        </div>
    </div>
</template>
