<template>
    <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
        <div v-for="post in posts" :key="post.title">
            <p class="text-xs text-gray-500">
                <time :datetime="post.publish_date">{{ post.publish_date }}</time>
            </p>
            <a :href="route('single', post.slug)" class="mt-2 block">
                <p class="text-lg font-semibold text-gray-900 capitalize">
                    {{ post.title }}
                </p>
                <p class="mt-3 text-md text-gray-500">
                    {{ post.excerpt }}
                </p>
            </a>
            <div class="mt-3">
                <a :href="route('single', post.slug)" class="text-sm font-semibold text-primary-600 hover:text-primary-500"> Devamını
                    oku </a>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    posts: Object,
})

/*const posts = [
    {
        title: 'Boost your conversion rate',
        href: '#',
        category: {name: 'Article', href: '#', color: 'bg-indigo-100 text-indigo-800'},
        description:
            'Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.',
        date: '16 Mart, 2020',
        datetime: '2020-03-16',
        author: {
            name: 'Paul York',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        readingTime: '6 min',
    },
    {
        title: 'How to use search engine optimization to drive sales',
        href: '#',
        category: {name: 'Video', href: '#', color: 'bg-pink-100 text-pink-800'},
        description:
            'Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.',
        date: '10 Mart, 2020',
        datetime: '2020-03-10',
        author: {
            name: 'Dessie Ryan',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        readingTime: '4 min',
    },
    {
        title: 'Improve your customer experience',
        href: '#',
        category: {name: 'Case Study', href: '#', color: 'bg-green-100 text-green-800'},
        description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab iure iusto fugiat commodi sequi.',
        date: '12 Şubat, 2020',
        datetime: '2020-02-12',
        author: {
            name: 'Easer Collins',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        readingTime: '11 min',
    },
    {
        title: 'How to use search engine optimization to drive sales',
        href: '#',
        category: {name: 'Video', href: '#', color: 'bg-pink-100 text-pink-800'},
        description:
            'Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.',
        date: '10 Mart, 2020',
        datetime: '2020-03-10',
        author: {
            name: 'Dessie Ryan',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        readingTime: '4 min',
    },
    {
        title: 'Boost your conversion rate',
        href: '#',
        category: {name: 'Article', href: '#', color: 'bg-indigo-100 text-indigo-800'},
        description:
            'Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.',
        date: '16 Mart, 2020',
        datetime: '2020-03-16',
        author: {
            name: 'Paul York',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        readingTime: '6 min',
    },
    {
        title: 'Improve your customer experience',
        href: '#',
        category: {name: 'Case Study', href: '#', color: 'bg-green-100 text-green-800'},
        description: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab iure iusto fugiat commodi sequi.',
        date: '12 Şubat, 2020',
        datetime: '2020-02-12',
        author: {
            name: 'Easer Collins',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        readingTime: '11 min',
    },
]*/
</script>

<style scoped>

</style>
