<script>

import { Link } from '@inertiajs/vue3'
import navigation from '@/Layouts/navigation.vue'

export default{
    props:{
        posts:{
            type:Object
        }
    }, 
    components:{
        Link,
        navigation
    }
}

</script>

<template>
    <navigation></navigation>
    <h1>Posts</h1>

    <div v-for="post in posts" :key="post.id">
        
        <h1> {{ post.title }}</h1>
        <p> {{ post.content }}</p>
        
        <Link :href="route('singlePost', { id: post.id })"> View Post</Link>

    </div>

</template>
