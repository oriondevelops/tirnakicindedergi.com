<template>
    <!--
    TODO Make gallery a slider with transparent arrows
    -->
    <div class="mt-4  overflow-hidden shadow rounded-xl">
        <div class="py-4 my-0.5 mt-1 mx-0.5 sm:p-2 overflow-hidden aspect-video">
            <img src="https://i.pinimg.com/originals/23/3e/ea/233eeace31a2d93e370b87a4b9acb326.jpg" alt=""
                 class="aspect-video hover:scale-[1.2] duration-[8888ms] border-2 border-primary-500/50 rounded-xl"/>
        </div>
        <div class="bg-gray-50 px-4 py-4 sm:px-6">
            <GalleryMeta/>
            <p class="text-gray-600 text-responsive">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo impedit sapiente recusandae iusto officiis
                dolor? Laborum quibusdam quam, quidem vel assumenda repellat inventore sint nesciunt, ullam asperiores
                magnam placeat eveniet. Aliquam voluptatibus assumenda distinctio veniam quam tempora modi aperiam nemo
                voluptate reprehenderit quidem, nisi vero est.</p>
        </div>
    </div>
</template>

<script setup>
import GalleryMeta from "@/Pages/Home/Partials/GalleryMeta.vue";
</script>

<style scoped>

</style>
